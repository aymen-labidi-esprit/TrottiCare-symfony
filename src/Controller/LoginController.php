<?php
// src/Controller/LoginController.php
namespace App\Controller;

use App\Entity\Utilisateur;
use App\Repository\UtilisateurRepository;
use App\Service\FacialRecognitionService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Session\SessionInterface; // Needed for manual login
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface; // Needed? Maybe not here.
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface; // Needed for manual login
use Symfony\Component\Security\Core\Authentication\Token\UsernamePasswordToken; // Needed for manual login
use Symfony\Component\Security\Core\Exception\CustomUserMessageAccountStatusException; // For errors
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface; // For redirects

class LoginController extends AbstractController
{
    private UrlGeneratorInterface $urlGenerator;

    public function __construct(UrlGeneratorInterface $urlGenerator)
    {
        $this->urlGenerator = $urlGenerator;
    }

    /**
     * Displays the login page.
     */
    #[Route('/connexion-page', name: 'app_login_page', methods: ['GET'])]
    public function loginPage(AuthenticationUtils $authenticationUtils): Response
    {
        // Logic to redirect if already logged in
        if ($this->getUser()) {
            // Redirect logic... (as before)
            if ($this->isGranted('ROLE_ADMIN')) return $this->redirectToRoute('admin_dashboard');
            if ($this->isGranted('ROLE_PARTENAIRE')) return $this->redirectToRoute('app_partenaire_dashboard');
            return $this->redirectToRoute('client_dashboard');
        }

        $error = $authenticationUtils->getLastAuthenticationError();
        $lastUsername = $authenticationUtils->getLastUsername();

        return $this->render('security/login.html.twig', [
            'last_username' => $lastUsername,
            'error' => $error,
        ]);
    }

    /**
     * Route for password form submission (handled by PasswordOnlyAuthenticator)
     */
    #[Route('/login/authenticate-password', name: 'app_login_authenticate_password', methods: ['POST'])]
    public function loginAuthenticatePassword(): void
    {
        // Handled by PasswordOnlyAuthenticator::authenticate()
        throw new \LogicException('This method should not be reached. Check security firewall.');
    }

    /**
     * AJAX: Checks email existence and available login methods.
     */
    #[Route('/login/check-email-caps', name: 'app_login_check_email_caps', methods: ['POST'])]
    public function checkEmailAndCapabilities(Request $request, UtilisateurRepository $userRepository): JsonResponse
    {
        $email = $request->request->get('email');
        if (empty($email)) {
            return new JsonResponse(['success' => false, 'message' => 'Email manquant.'], Response::HTTP_BAD_REQUEST);
        }

        /** @var Utilisateur|null $user */
        $user = $userRepository->findOneBy(['email' => $email]);

        if (!$user) {
            return new JsonResponse(['success' => false, 'message' => 'Aucun compte trouvé pour cet email.'], Response::HTTP_NOT_FOUND);
        }

        // Determine capabilities
        $canLoginWithPassword = !empty($user->getPassword()); // Check if password hash exists
        $canLoginWithFace = !empty($user->getFaceEmbedding());

        if (!$canLoginWithPassword && !$canLoginWithFace) {
            return new JsonResponse(['success' => false, 'message' => 'Aucune méthode de connexion configurée pour ce compte.'], Response::HTTP_FORBIDDEN);
        }

        // Optional: Add checks for isActive and isVerified here for better UX
        if (!$user->isActive()) {
            return new JsonResponse(['success' => false, 'message' => 'Ce compte est désactivé.'], Response::HTTP_FORBIDDEN);
        }
        if (!$user->isVerified()) {
            return new JsonResponse(['success' => false, 'message' => 'Ce compte n\'est pas vérifié. Consultez votre e-mail.'], Response::HTTP_FORBIDDEN);
        }

        return new JsonResponse([
            'success' => true,
            'canLoginWithPassword' => $canLoginWithPassword,
            'canLoginWithFace' => $canLoginWithFace,
            'message' => 'Choisissez votre méthode de connexion.'
        ]);
    }

    /**
     * AJAX: Handles facial login attempt and performs manual authentication.
     */
    #[Route('/login/authenticate-face', name: 'app_login_authenticate_face', methods: ['POST'])]
    public function authenticateFace(
        Request $request,
        UtilisateurRepository $userRepository,
        FacialRecognitionService $faceRecService,
        TokenStorageInterface $tokenStorage, // For manual login
        SessionInterface $session // For manual login
    ): JsonResponse {
        $email = $request->request->get('email');
        $faceData = $request->request->get('face_data'); // Expect comma-separated string

        if (empty($email) || empty($faceData)) {
            return new JsonResponse(['success' => false, 'message' => 'Données email ou faciales manquantes.'], Response::HTTP_BAD_REQUEST);
        }

        /** @var Utilisateur|null $user */
        $user = $userRepository->findOneBy(['email' => $email]);

        // Verify user exists and has face data configured
        if (!$user || empty($user->getFaceEmbedding())) {
            return new JsonResponse(['success' => false, 'message' => 'Utilisateur ou configuration faciale introuvable.'], Response::HTTP_NOT_FOUND);
        }

        // --- CRITICAL CHECKS before expensive face comparison ---
        if (!$user->isActive()) {
            return new JsonResponse(['success' => false, 'message' => 'Ce compte est désactivé.'], Response::HTTP_FORBIDDEN);
        }
        if (!$user->isVerified()) {
            return new JsonResponse(['success' => false, 'message' => 'Ce compte n\'est pas vérifié.'], Response::HTTP_FORBIDDEN);
        }
        // --- END CRITICAL CHECKS ---

        // Compare Faces using the Service
        $isMatch = $faceRecService->compareFaces($faceData, $user->getFaceEmbedding());

        if ($isMatch) {
            // Face matches! Manually Authenticate the User
            try {
                // 1. Create the Security Token ('main' = firewall name)
                $securityToken = new UsernamePasswordToken($user, 'main', $user->getRoles());

                // 2. Set token in Token Storage (for current request)
                $tokenStorage->setToken($securityToken);

                // 3. Set token in Session (for subsequent requests)
                // Use the standard key Symfony's ContextListener looks for
                $session->set('_security_main', serialize($securityToken));

                // 4. Regenerate session ID
                $session->migrate(true);

                // 5. Determine Redirect URL
                $redirectUrl = $session->get('_security.main.target_path'); // <--- CORRECT LINE (assuming firewall name is 'main')
                if (!$redirectUrl) {
                    $roles = $user->getRoles();
                    if (in_array('ROLE_ADMIN', $roles, true)) $redirectUrl = $this->urlGenerator->generate('admin_dashboard');
                    elseif (in_array('ROLE_PARTENAIRE', $roles, true)) $redirectUrl = $this->urlGenerator->generate('app_partenaire_dashboard');
                    else $redirectUrl = $this->urlGenerator->generate('client_dashboard');
                }

                // 6. Return success with redirect URL for JS
                return new JsonResponse([
                    'success' => true,
                    'message' => 'Authentification faciale réussie.',
                    'redirectUrl' => $redirectUrl
                ]);

            } catch (\Exception $e) {
                // Log internal errors during token creation/session setting
                error_log("Manual facial login error: " . $e->getMessage());
                return new JsonResponse(['success' => false, 'message' => 'Erreur interne lors de la connexion.'], Response::HTTP_INTERNAL_SERVER_ERROR);
            }
        } else {
            // Face does not match
            return new JsonResponse([
                'success' => false,
                'message' => 'Visage non reconnu. Réessayez.'
            ], Response::HTTP_UNAUTHORIZED); // 401 Unauthorized
        }
    }

    #[Route(path: '/logout', name: 'app_logout')]
    public function logout(): void
    {
        // Intercepted by the logout key in security.yaml
        throw new \LogicException('This method can be blank - intercepted by the logout key.');
    }
}