<?php
// src/Security/PasswordOnlyAuthenticator.php
namespace App\Security;

use App\Entity\Utilisateur;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Core\Exception\AuthenticationException;
use Symfony\Component\Security\Core\Exception\CustomUserMessageAuthenticationException;
use Symfony\Component\Security\Http\Authenticator\AbstractLoginFormAuthenticator;
use Symfony\Component\Security\Http\Authenticator\Passport\Badge\RememberMeBadge;
use Symfony\Component\Security\Http\Authenticator\Passport\Badge\UserBadge;
use Symfony\Component\Security\Http\Authenticator\Passport\Credentials\PasswordCredentials;
use Symfony\Component\Security\Http\Authenticator\Passport\Passport;
use Symfony\Component\Security\Http\SecurityRequestAttributes;
use Symfony\Component\Security\Http\Util\TargetPathTrait;

class PasswordOnlyAuthenticator extends AbstractLoginFormAuthenticator
{
    use TargetPathTrait;

    // Route specifically for password submission
    public const LOGIN_ROUTE = 'app_login_authenticate_password';

    private UrlGeneratorInterface $urlGenerator;

    public function __construct(UrlGeneratorInterface $urlGenerator)
    {
        $this->urlGenerator = $urlGenerator;
    }

    public function supports(Request $request): bool
    {
        // Only supports the specific password submission route and POST method
        return self::LOGIN_ROUTE === $request->attributes->get('_route')
            && $request->isMethod('POST');
    }

    public function authenticate(Request $request): Passport
    {
        $email = $request->request->get('email', ''); // Expect 'email' from the form
        $password = $request->request->get('password', ''); // Expect 'password'

        if (empty($email) || empty($password)) {
            throw new CustomUserMessageAuthenticationException('Email et mot de passe requis.');
        }

        $request->getSession()->set(SecurityRequestAttributes::LAST_USERNAME, $email);

        return new Passport(
            new UserBadge($email),
            new PasswordCredentials($password),
            [
                // NO CsrfTokenBadge here as per request
                new RememberMeBadge(),
            ]
        );
    }

    public function onAuthenticationSuccess(Request $request, TokenInterface $token, string $firewallName): ?Response
    {
        $user = $token->getUser();

        if (!$user instanceof Utilisateur) {
            return new RedirectResponse($this->urlGenerator->generate('app_home'));
        }

        // --- CRITICAL CHECKS ---
        if (!$user->isActive()) {
            // Logout immediately and show message
            // Note: Since we bypassed UserChecker, we need to handle this here.
            $request->getSession()->remove('_security_main'); // Clear potential session token
            throw new CustomUserMessageAccountStatusException('Votre compte a été désactivé.');
        }
        if (!$user->isVerified()) {
            // Logout immediately and show message
            $request->getSession()->remove('_security_main');
            throw new CustomUserMessageAccountStatusException('Votre compte n\'est pas vérifié. Veuillez consulter votre e-mail.');
        }
        // --- END CRITICAL CHECKS ---


        // Redirect logic
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

    protected function getLoginUrl(Request $request): string
    {
        // URL of the page *displaying* the login form
        return $this->urlGenerator->generate('app_login_page');
    }

    // onAuthenticationFailure can remain similar, redirecting back to login page
    public function onAuthenticationFailure(Request $request, AuthenticationException $exception): Response
    {
        if ($request->hasSession()) {
            $request->getSession()->set(SecurityRequestAttributes::AUTHENTICATION_ERROR, $exception);
        }

        $url = $this->getLoginUrl($request);

        return new RedirectResponse($url);
    }
}