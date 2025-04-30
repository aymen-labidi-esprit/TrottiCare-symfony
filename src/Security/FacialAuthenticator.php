<?php
// src/Security/FacialAuthenticator.php
namespace App\Security;

use App\Entity\Utilisateur; // Use your User entity
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse; // For AJAX responses
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Core\Exception\AuthenticationException;
use Symfony\Component\Security\Core\Exception\CustomUserMessageAuthenticationException;
use Symfony\Component\Security\Http\Authenticator\AbstractLoginFormAuthenticator;
use Symfony\Component\Security\Http\Authenticator\Passport\Badge\CsrfTokenBadge;
use Symfony\Component\Security\Http\Authenticator\Passport\Badge\RememberMeBadge; // Optional
use Symfony\Component\Security\Http\Authenticator\Passport\Badge\UserBadge;
use Symfony\Component\Security\Http\Authenticator\Passport\Credentials\PasswordCredentials;
use Symfony\Component\Security\Http\Authenticator\Passport\Passport;
use Symfony\Component\Security\Http\SecurityRequestAttributes;
use Symfony\Component\Security\Http\Util\TargetPathTrait;

class FacialAuthenticator extends AbstractLoginFormAuthenticator
{
    use TargetPathTrait;

    public const LOGIN_ROUTE = 'app_login_authenticate'; // Define a specific route for the *final* password submission

    private UrlGeneratorInterface $urlGenerator;

    public function __construct(UrlGeneratorInterface $urlGenerator)
    {
        $this->urlGenerator = $urlGenerator;
    }

    /**
     * Does the authenticator support the given Request?
     *
     * Check that the path and method match.
     */
    public function supports(Request $request): bool
    {
        return self::LOGIN_ROUTE === $request->attributes->get('_route')
            && $request->isMethod('POST');
    }

    /**
     * Create a passport for the current request.
     *
     * The passport contains the user, credentials and badges that are used to
     * authenticate the user. (e.g. Passport::END_SIGNAL tells skip credentials verification)
     *
     * @throws AuthenticationException
     */
    public function authenticate(Request $request): Passport
    {
        // This method is only called for the *final* password submission step
        // The email and face verification happen via AJAX calls handled by LoginController
        $email = $request->request->get('email', '');
        $password = $request->request->get('password', '');
        $csrfToken = $request->request->get('_csrf_token', '');
        // The face token is *not* directly handled here, it's checked by FacialUserChecker

        if (empty($email) || empty($password) || empty($csrfToken)) {
            throw new CustomUserMessageAuthenticationException('Email, mot de passe et jeton CSRF requis.');
        }

        $request->getSession()->set(SecurityRequestAttributes::LAST_USERNAME, $email);

        return new Passport(
            new UserBadge($email), // Finds user by email
            new PasswordCredentials($password), // Checks password
            [
                new CsrfTokenBadge('authenticate', $csrfToken), // Checks CSRF
                new RememberMeBadge(), // Optional: Enable "remember me" functionality
                // No custom badge for face token here, UserChecker intercepts earlier
            ]
        );
    }

    /**
     * Called on successfull authentication.
     *
     * @param Request $request
     * @param TokenInterface $token
     * @param string $firewallName The name of the firewall secureing the authenticator
     *
     * @return Response|null Null means continue
     */
    public function onAuthenticationSuccess(Request $request, TokenInterface $token, string $firewallName): ?Response
    {
        // Redirect logic based on user roles, similar to your original manual controller
        $user = $token->getUser();

        // Clear the temporary face token from session after successful login
        $request->getSession()->remove('face_recognition_token');


        if (!$user instanceof Utilisateur) {
            // Should not happen if UserBadge works correctly
            return new RedirectResponse($this->urlGenerator->generate('app_home'));
        }

        // Ensure user is active and verified *before* redirecting
        if (!$user->isActive()) {
            // Log user out immediately and show message
            $this->logoutUser($request);
            throw new CustomUserMessageAuthenticationException('Votre compte a été désactivé.');
        }
        if (!$user->isVerified()) {
            // Log user out immediately and show message
            $this->logoutUser($request);
            throw new CustomUserMessageAuthenticationException('Votre compte n\'est pas vérifié. Veuillez consulter votre e-mail.');
        }

        // Redirect based on target path or roles
        if ($targetPath = $this->getTargetPath($request->getSession(), $firewallName)) {
            return new RedirectResponse($targetPath);
        }

        $roles = $user->getRoles();
        if (in_array('ROLE_ADMIN', $roles, true)) {
            return new RedirectResponse($this->urlGenerator->generate('admin_dashboard'));
        } elseif (in_array('ROLE_PARTENAIRE', $roles, true)) {
            return new RedirectResponse($this->urlGenerator->generate('app_partenaire_dashboard'));
        } else {
            return new RedirectResponse($this->urlGenerator->generate('client_dashboard'));
        }
    }

    /**
     * Called on failure. Used for AJAX login to return JSON.
     * For traditional forms, it's usually handled by getLoginUrl().
     *
     * @return Response
     */
    public function onAuthenticationFailure(Request $request, AuthenticationException $exception): Response
    {
        // Store error in session to display on the login page
        // Use a specific key for facial login errors
        $request->getSession()->set(SecurityRequestAttributes::AUTHENTICATION_ERROR, $exception);

        // Ensure the temporary face token is cleared on failure too
        $request->getSession()->remove('face_recognition_token');

        // Return JSON response indicating failure for the AJAX call
        return new JsonResponse([
            'success' => false,
            // Use a generic message for security, details are in the exception if needed
            'message' => strtr($exception->getMessageKey(), $exception->getMessageData())
            // 'message' => 'Identifiants invalides ou erreur d\'authentification.'
        ], Response::HTTP_UNAUTHORIZED); // Use 401 status code
    }

    /**
     * Return the URL to the login page.
     */
    protected function getLoginUrl(Request $request): string
    {
        // URL of the page displaying the login form (not the processing route)
        return $this->urlGenerator->generate('app_login_page');
    }

    /**
     * Helper to logout user if needed during success check (e.g., inactive/unverified)
     */
    private function logoutUser(Request $request): void
    {
        // Invalidating the session and removing the token manually
        // This requires TokenStorageInterface, SessionInterface - inject if needed
        // Or rely on security system logout handlers if configured
        // For simplicity here, just clear the session attribute if set
        $request->getSession()->remove('_security_main'); // Adjust 'main' if firewall name differs
        $request->getSession()->remove('face_recognition_token');
        // Potentially call tokenStorage->setToken(null) if available
    }
}