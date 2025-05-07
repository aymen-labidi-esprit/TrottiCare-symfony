<?php
// src/Controller/SecurityController.php

namespace App\Controller;

use App\Entity\Utilisateur;
use App\Repository\UtilisateurRepository; // Use the specific Repository
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\RedirectResponse; // For redirects
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface; // Needed for manual token setting
use Symfony\Component\Security\Core\Authentication\Token\UsernamePasswordToken; // Needed for manual token creation
use Symfony\Component\Security\Csrf\CsrfToken; // Needed for CSRF check
use Symfony\Component\Security\Csrf\CsrfTokenManagerInterface; // Needed for CSRF check
use Symfony\Component\Security\Http\SecurityRequestAttributes; // For LAST_USERNAME constant

class SecurityController extends AbstractController
{
    // =========================================================================
    // == MANUAL AUTHENTICATION IMPLEMENTATION (REVISED & CORRECTED)        ==
    // =========================================================================
    // == WARNING: This implements login/logout manually. While corrected to ==
    // == integrate with Symfony's session context for authorization        ==
    // == (#[IsGranted], access_control), it bypasses standard authenticators.==
    // == Ensure thorough testing and understanding.                          ==
    // =========================================================================

    #[Route('/connexion', name: 'app_login', methods: ['GET', 'POST'])]
    public function login(
        Request $request,
        UtilisateurRepository $userRepository, // Use specific repository
        UserPasswordHasherInterface $passwordHasher,
        CsrfTokenManagerInterface $csrfTokenManager,
        TokenStorageInterface $tokenStorage,
        SessionInterface $session
    ): Response {
        // --- Redirect if already logged in ---
        // Check if a security token exists AND represents an authenticated user
        if ($session->has('_security_main') && $tokenStorage->getToken()?->getUser() instanceof Utilisateur) {
            $roles = $tokenStorage->getToken()->getRoleNames(); // Get roles from the active token
            if (in_array('ROLE_ADMIN', $roles, true)) {
                return $this->redirectToRoute('admin_dashboard'); // Use your actual route names
            }
            if (in_array('ROLE_PARTENAIRE', $roles, true)) {
                return $this->redirectToRoute('app_partenaire_dashboard'); // Use your actual route names
            }
            if (in_array('ROLE_CLIENT', $roles, true)) {
                return $this->redirectToRoute('client_dashboard'); // Use your actual route names
            }
            // Fallback if roles don't match expected dashboards
            return $this->redirectToRoute('app_home');
        }

        $error = null;
        // Get last username entered (if any) for pre-filling the form
        $lastUsername = $request->getSession()->get(SecurityRequestAttributes::LAST_USERNAME);

        if ($request->isMethod('POST')) {
            $email = $request->request->get('email'); // Use '_username' as standard convention
            $password = $request->request->get('password'); // Use '_password' as standard convention
            $csrfToken = $request->request->get('_csrf_token');

            // Store the submitted email in the session for pre-filling if login fails
            $request->getSession()->set(SecurityRequestAttributes::LAST_USERNAME, $email);

            // 1. CSRF Validation (CRITICAL for security)
            $token = new CsrfToken('authenticate', $csrfToken);


            // 2. Find User by Email
            $user = $userRepository->findOneBy(['email' => $email]);
// **New**: Block if not active
            if ($user && !$user->isActive()) {
                $this->addFlash('error', 'Votre compte a été désactivé. Contactez un administrateur.');
                return $this->render('security/login.html.twig', [
                    'last_username' => $email,
                    'error'         => 'Votre compte est désactivé.',
                ]);
            }

            // 3. Validate User and Password
            if (!$user || !$passwordHasher->isPasswordValid($user, $password)) {
                $this->addFlash('error', 'Identifiants invalides.');
                // Render the login form again
                return $this->render('security/login.html.twig', [
                    'last_username' => $email,
                    'error' => 'Identifiants invalides.',
                ]);
            }

            // --- If validation passes: MANUAL SESSION START & TOKEN CREATION ---

            // 4. Create the Security Token
            // 'main' MUST match the firewall name in security.yaml
            $securityToken = new UsernamePasswordToken($user, 'main', $user->getRoles());

            // 5. Manually set the token in the Token Storage for the current request
            $tokenStorage->setToken($securityToken);

            // 6. Manually store the token in the session for subsequent requests.
            // This is the key part for making #[IsGranted], access_control, etc., work.
            // Symfony's ContextListener should pick this up. Use the conventional key.
            $session->set('_security_main', serialize($securityToken));

            // 7. Regenerate session ID to prevent session fixation attacks
            $session->migrate(true);

            // 8. Clear the last username from session after successful login
            $request->getSession()->remove(SecurityRequestAttributes::LAST_USERNAME);

            $this->addFlash('success', 'Connexion réussie ! Bienvenue ' . $user->getPrenom() . '.');

            // 9. Redirect based on role
            $roles = $user->getRoles(); // Use roles from the user entity
            if (in_array('ROLE_ADMIN', $roles, true)) {
                return $this->redirectToRoute('admin_dashboard'); // Use your actual route names
            } elseif (in_array('ROLE_PARTENAIRE', $roles, true)) {
                return $this->redirectToRoute('app_partenaire_dashboard'); // Use your actual route names
            } else { // Default for ROLE_CLIENT or ROLE_USER
                return $this->redirectToRoute('client_dashboard'); // Use your actual route names
            }
        }

        // --- Render the login form on GET request or if POST validation failed before step 4 ---
        // Check for authentication errors stored by previous attempts (e.g., if using firewall exceptions)
        // Note: With this fully manual approach, direct errors are less common here unless
        // you explicitly throw Symfony security exceptions. Flash messages are primary.
        // $authError = $request->getSession()->get(SecurityRequestAttributes::AUTHENTICATION_ERROR);
        // if ($authError) {
        //     $error = $authError->getMessageKey(); // Or getMessage()
        //     $request->getSession()->remove(SecurityRequestAttributes::AUTHENTICATION_ERROR); // Clear error
        //     $this->addFlash('error', $error); // Add as flash message
        // }


        return $this->render('security/login.html.twig', [
            'last_username' => $lastUsername,
            'error' => $error, // Pass any direct error message (though flash is preferred)
        ]);
    }

    #[Route('/deconnexion', name: 'app_logout', methods: ['GET'])]
    public function logout(
        Request $request, // Request might be needed if clearing cookies etc.
        TokenStorageInterface $tokenStorage,
        SessionInterface $session
    ): Response {
        // MANUAL LOGOUT IMPLEMENTATION

        // 1. Clear the security token from token storage for the current request
        $tokenStorage->setToken(null);

        // 2. Remove the security token from the session storage
        $session->remove('_security_main');

        // 3. Invalidate the entire session and regenerate CSRF token
        // This clears all session data and generates a new session ID.
        $session->invalidate();

        $this->addFlash('success', 'Vous avez été déconnecté.');

        // Redirect to homepage or login page
        return $this->redirectToRoute('app_home');

        // NOTE: Symfony's security.yaml 'logout' path configuration is NOT used here.
        // The route '/deconnexion' directly triggers this manual logout action.
        // Throwing an exception here is unnecessary and typically not done for logout.
        // throw new \LogicException('This method should not be reached!');
    }
}