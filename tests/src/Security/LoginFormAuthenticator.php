<?php
// src/Security/LoginFormAuthenticator.php
namespace App\Security;

use App\Entity\Utilisateur;
use Doctrine\ORM\EntityManagerInterface; // Needed if checking isVerified status before login attempt potentially
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Core\Exception\CustomUserMessageAuthenticationException;
use Symfony\Component\Security\Core\Security; // Deprecated, use SecurityRequestAttributes
use Symfony\Component\Security\Http\Authenticator\AbstractLoginFormAuthenticator;
use Symfony\Component\Security\Http\Authenticator\Passport\Badge\CsrfTokenBadge;
use Symfony\Component\Security\Http\Authenticator\Passport\Badge\RememberMeBadge;
use Symfony\Component\Security\Http\Authenticator\Passport\Badge\UserBadge;
use Symfony\Component\Security\Http\Authenticator\Passport\Credentials\PasswordCredentials;
use Symfony\Component\Security\Http\Authenticator\Passport\Passport;
use Symfony\Component\Security\Http\Util\TargetPathTrait;
use Symfony\Component\Security\Http\SecurityRequestAttributes; // Use this


class LoginFormAuthenticator extends AbstractLoginFormAuthenticator
{
    use TargetPathTrait;

    public const LOGIN_ROUTE = 'app_login';

    private UrlGeneratorInterface $urlGenerator;
    // private EntityManagerInterface $entityManager; // Inject if needed

    public function __construct(UrlGeneratorInterface $urlGenerator /*, EntityManagerInterface $entityManager*/)
    {
        $this->urlGenerator = $urlGenerator;
        // $this->entityManager = $entityManager;
    }

    public function authenticate(Request $request): Passport
    {
        $email = $request->request->get('email', '');

        $request->getSession()->set(SecurityRequestAttributes::LAST_USERNAME, $email);

        return new Passport(
            new UserBadge($email),
            new PasswordCredentials($request->request->get('password', '')),
            [
                new CsrfTokenBadge('authenticate', $request->request->get('_csrf_token')),
                new RememberMeBadge(),
            ]
        );
    }

    public function onAuthenticationSuccess(Request $request, TokenInterface $token, string $firewallName): ?Response
    {
        // Check if the user's email is verified BEFORE allowing login success
        $user = $token->getUser();
        if ($user instanceof Utilisateur && !$user->isActive()) {
            throw new CustomUserMessageAuthenticationException('Votre compte a été désactivé.');
        }
        if ($user instanceof Utilisateur && !$user->isVerified()) {
            // Optionally flash a message
            $this->addFlash($request, 'warning', 'Votre compte n\'est pas encore vérifié. Veuillez consulter votre email.');

            // Throw an exception to prevent login - this will redirect to login page with the flash message
            // You might want a custom exception if you want different handling
            throw new CustomUserMessageAuthenticationException('Compte non vérifié.');

            // Alternative: Redirect explicitly, but user remains technically authenticated for this request
            // return new RedirectResponse($this->urlGenerator->generate('app_login'));
        }


        if ($targetPath = $this->getTargetPath($request->getSession(), $firewallName)) {
            return new RedirectResponse($targetPath);
        }

        // Redirect based on role
        if ($user instanceof Utilisateur) { // Check if user object is available
            if (in_array('ROLE_ADMIN', $user->getRoles(), true)) {
                return new RedirectResponse($this->urlGenerator->generate('app_admin_dashboard'));
            }
            if (in_array('ROLE_PARTENAIRE', $user->getRoles(), true)) {
                return new RedirectResponse($this->urlGenerator->generate('app_partenaire_dashboard'));
            }
            // Default for ROLE_USER or others
            return new RedirectResponse($this->urlGenerator->generate('client_dashboard')); // Default to client dashboard
        }

        // Fallback redirect
        return new RedirectResponse($this->urlGenerator->generate('app_home'));
    }

    protected function getLoginUrl(Request $request): string
    {
        return $this->urlGenerator->generate(self::LOGIN_ROUTE);
    }

    // Helper function to add flash messages
    private function addFlash(Request $request, string $type, string $message): void
    {
        // Check if the session factory is available
        if ($request->hasSession()) {
            $request->getSession()->getFlashBag()->add($type, $message);
        }
    }
}