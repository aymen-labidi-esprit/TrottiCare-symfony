<?php
// src/Security/FacialUserChecker.php
namespace App\Security;

use App\Entity\Utilisateur; // Your User entity
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Component\Security\Core\Exception\CustomUserMessageAccountStatusException;
use Symfony\Component\Security\Core\User\UserCheckerInterface;
use Symfony\Component\Security\Core\User\UserInterface;

class FacialUserChecker implements UserCheckerInterface
{
    private RequestStack $requestStack;

    public function __construct(RequestStack $requestStack)
    {
        $this->requestStack = $requestStack;
    }

    /**
     * Checks the user account before authentication.
     * Verifies the temporary face recognition token.
     */
    public function checkPreAuth(UserInterface $user): void
    {
        if (!$user instanceof Utilisateur) {
            return; // Only check for your specific user type
        }

        $request = $this->requestStack->getCurrentRequest();
        if (!$request) {
            // Should not happen in a web context, but good practice
            throw new CustomUserMessageAccountStatusException("Contexte de requête introuvable.");
        }

        // Get the token submitted with the password form
        $submittedToken = $request->request->get('face_token'); // Name this field in your login JS final POST

        // Get the token stored in the session during face verification step
        $session = $this->requestStack->getSession();
        $expectedToken = $session->get('face_recognition_token');

        // Basic check: Is a token expected for this login attempt?
        // If $expectedToken is null, maybe allow standard password login?
        // For strict facial+password, we require $expectedToken.
        if ($expectedToken === null) {
            throw new CustomUserMessageAccountStatusException("Session de reconnaissance faciale invalide ou expirée. Veuillez recommencer.");
        }

        // Compare the tokens
        if (empty($submittedToken) || !hash_equals((string)$expectedToken, (string)$submittedToken)) {
            // Clear the session token on mismatch to force restart
            $session->remove('face_recognition_token');
            // Throw exception to block login
            throw new CustomUserMessageAccountStatusException("Jeton de reconnaissance faciale invalide ou manquant. Connexion bloquée.");
        }

        // Token is valid! It will be cleared in onAuthenticationSuccess of the authenticator.
        // Don't clear it here yet, as password check might still fail.
    }

    /**
     * Checks the user account after authentication.
     * (Can check for inactive, banned status here if not done elsewhere)
     */
    public function checkPostAuth(UserInterface $user): void
    {
        if (!$user instanceof Utilisateur) {
            return;
        }

        // Example: Check if account is active (can also be done in onAuthenticationSuccess)
        // if (!$user->isActive()) {
        //     throw new CustomUserMessageAccountStatusException('Votre compte est désactivé.');
        // }
        // Example: Check if email is verified (can also be done in onAuthenticationSuccess)
        // if (!$user->isVerified()) {
        //     throw new CustomUserMessageAccountStatusException('Votre compte n\'est pas vérifié.');
        // }
    }
}