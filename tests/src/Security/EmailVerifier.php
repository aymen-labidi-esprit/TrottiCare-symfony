<?php
// src/Security/EmailVerifier.php
namespace App\Security;

use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Mailer\Exception\TransportExceptionInterface; // Import exception
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Security\Core\User\UserInterface;
use SymfonyCasts\Bundle\VerifyEmail\Exception\VerifyEmailExceptionInterface;
use SymfonyCasts\Bundle\VerifyEmail\VerifyEmailHelperInterface;
use App\Entity\Utilisateur; // Your User class

class EmailVerifier
{
    public function __construct(
        private VerifyEmailHelperInterface $verifyEmailHelper,
        private MailerInterface $mailer,
        private EntityManagerInterface $entityManager
    ) {
    }

    /**
     * @throws TransportExceptionInterface
     */
    public function sendEmailConfirmation(string $verifyEmailRouteName, Utilisateur $user, TemplatedEmail $email): void
    {
        // Ensure the user object is the correct type
        if (!$user instanceof Utilisateur) {
            throw new \LogicException('User must be an instance of ' . Utilisateur::class);
        }
        if (!$user->getId()) {
            throw new \LogicException('User must have an ID to generate verification signature.');
        }
        if (!$user->getEmail()) {
            throw new \LogicException('User must have an email address.');
        }

        $signatureComponents = $this->verifyEmailHelper->generateSignature(
            $verifyEmailRouteName,
            (string) $user->getId(), // Cast ID to string
            $user->getEmail(),
            ['id' => (string) $user->getId()] // Ensure parameters match route requirements
        );

        $context = $email->getContext();
        $context['signedUrl'] = $signatureComponents->getSignedUrl();
        $context['expiresAtMessageKey'] = $signatureComponents->getExpirationMessageKey();
        $context['expiresAtMessageData'] = $signatureComponents->getExpirationMessageData();

        $email->context($context);

        $this->mailer->send($email);
    }

    /**
     * @throws VerifyEmailExceptionInterface
     */
    public function handleEmailConfirmation(Request $request, Utilisateur $user): void
    {
        // Ensure the user object is the correct type
        if (!$user instanceof Utilisateur) {
            throw new \LogicException('User must be an instance of ' . Utilisateur::class);
        }
        if (!$user->getId()) {
            throw new \LogicException('User must have an ID to validate email confirmation.');
        }
        if (!$user->getEmail()) {
            throw new \LogicException('User must have an email address.');
        }

        // The verifyEmailHelper->validateEmailConfirmation() method throws the exception if validation fails
        $this->verifyEmailHelper->validateEmailConfirmation($request->getUri(), (string) $user->getId(), $user->getEmail());

        $user->setIsVerified(true);

        // No need to persist, just flush the change
        $this->entityManager->flush();
    }
}