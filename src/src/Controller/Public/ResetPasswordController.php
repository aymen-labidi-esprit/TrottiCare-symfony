<?php
// src/Controller/ResetPasswordController.php
namespace App\Controller\Public; // Adjust namespace if needed (e.g., App\Controller\Public)

use App\Entity\Utilisateur;
use App\Form\ChangePasswordFormType;
use App\Form\ResetPasswordRequestFormType;
use App\Repository\UtilisateurRepository; // Make sure this is the correct path
use Doctrine\ORM\EntityManagerInterface;
use Psr\Log\LoggerInterface; // Optional: For logging errors
use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mailer\Exception\TransportExceptionInterface; // Import mailer exception
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Address;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Contracts\Translation\TranslatorInterface;
use SymfonyCasts\Bundle\ResetPassword\Controller\ResetPasswordControllerTrait;
use SymfonyCasts\Bundle\ResetPassword\Exception\ResetPasswordExceptionInterface;
use SymfonyCasts\Bundle\ResetPassword\ResetPasswordHelperInterface;

#[Route('/reset-password')] // Base route for all actions in this controller
class ResetPasswordController extends AbstractController
{
    // Add the trait provided by the bundle for session handling etc.
    use ResetPasswordControllerTrait;

    private ResetPasswordHelperInterface $resetPasswordHelper;
    private EntityManagerInterface $entityManager;
    private ?LoggerInterface $logger; // Optional logger

    public function __construct(
        ResetPasswordHelperInterface $resetPasswordHelper,
        EntityManagerInterface $entityManager,
        ?LoggerInterface $logger = null // Make logger optional
    ) {
        $this->resetPasswordHelper = $resetPasswordHelper;
        $this->entityManager = $entityManager;
        $this->logger = $logger;
    }

    /**
     * Displays & processes the form to request a password reset link.
     */
    #[Route('', name: 'app_forgot_password_request', methods: ['GET', 'POST'])]
    public function request(Request $request, MailerInterface $mailer, TranslatorInterface $translator): Response
    {
        // Redirect if already logged in
        if ($this->getUser()) {
            return $this->redirectToRoute('app_home'); // Or client dashboard
        }

        $form = $this->createForm(ResetPasswordRequestFormType::class);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // The RecaptchaV2 constraint on the form's email field handles reCAPTCHA validation.
            // If the form is valid here, reCAPTCHA was likely successful.

            // Process sending the password reset email
            return $this->processSendingPasswordResetEmail(
                $form->get('email')->getData(), // Get email from form
                $mailer,
                $translator
            );
        } elseif ($form->isSubmitted()) {
            // If submitted but invalid, flash messages for specific field errors
            // (like reCAPTCHA failure) should already be added by the validator.
            // You could add a generic one here if desired.
            $this->addFlash('danger', 'Veuillez corriger les erreurs dans le formulaire.');
        }

        return $this->render('reset_password/request.html.twig', [
            'requestForm' => $form->createView(),
            // No need to pass recaptcha_v2_site_key here if it's a global Twig var
        ]);
    }

    /**
     * Confirmation page shown after a user has requested a password reset.
     */
    #[Route('/check-email', name: 'app_check_email', methods: ['GET'])]
    public function checkEmail(): Response
    {
        // Generate a fake token if the user does not exist or someone hit this page directly.
        // This prevents exposing whether or not a user was found with the given email address.
        if (null === ($resetToken = $this->getTokenObjectFromSession())) {
            // If the token is not found in the session, generate a fake one.
            $resetToken = $this->resetPasswordHelper->generateFakeResetToken();
        }

        return $this->render('reset_password/check_email.html.twig', [
            'resetToken' => $resetToken,
            // Pass the token lifetime (in seconds) to the template for display.
            'tokenLifetime' => $this->resetPasswordHelper->getTokenLifetime(),
        ]);
    }

    /**
     * Validates and processes the reset URL that the user clicked in their email.
     */
    #[Route('/reset/{token}', name: 'app_reset_password', methods: ['GET', 'POST'])]
    public function reset(Request $request, UserPasswordHasherInterface $passwordHasher, TranslatorInterface $translator, string $token = null): Response
    {
        // Redirect if already logged in
        if ($this->getUser()) {
            return $this->redirectToRoute('app_home'); // Or client dashboard
        }

        if ($token) {
            // We store the token in session and remove it from the URL, to avoid the URL being
            // loaded in browser history and potentially leaking the token.
            $this->storeTokenInSession($token);

            return $this->redirectToRoute('app_reset_password');
        }

        // Token is now removed from the URL and stored in the session.
        $token = $this->getTokenFromSession();
        if (null === $token) {
            // If no token is found in the session, throw an exception.
            throw $this->createNotFoundException('Aucun jeton de réinitialisation de mot de passe trouvé dans l\'URL ou dans la session.');
        }

        try {
            // Validate the token and fetch the associated user.
            /** @var Utilisateur $user */
            $user = $this->resetPasswordHelper->validateTokenAndFetchUser($token);
        } catch (ResetPasswordExceptionInterface $e) {
            // Handle specific exceptions (expired, used, invalid) with user-friendly messages.
            $this->addFlash('reset_password_error', sprintf(
                '%s - %s',
                $translator->trans(ResetPasswordExceptionInterface::MESSAGE_PROBLEM_VALIDATE, [], 'ResetPasswordBundle'),
                $translator->trans($e->getReason(), [], 'ResetPasswordBundle')
            ));

            // Redirect back to the password request page if the token is invalid.
            return $this->redirectToRoute('app_forgot_password_request');
        }

        // The token is valid; allow the user to change their password.
        $form = $this->createForm(ChangePasswordFormType::class);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // A password reset token should be used only once, remove it.
            $this->resetPasswordHelper->removeResetRequest($token);

            // Encode(hash) the plain password, and set it.
            $encodedPassword = $passwordHasher->hashPassword(
                $user,
                $form->get('plainPassword')->getData()
            );

            // Set the new hashed password on the user entity.
            $user->setPassword($encodedPassword);
            $this->entityManager->flush(); // Persist the changes to the database.

            // The session is cleaned up automatically by the bundle.
            $this->cleanSessionAfterReset(); // Clean up the session storage.

            // Add a success flash message and redirect to the login page.
            $this->addFlash('success', 'Votre mot de passe a été réinitialisé avec succès.');
            return $this->redirectToRoute('app_login_page');
        }

        // Render the password reset form.
        return $this->render('reset_password/reset.html.twig', [
            'resetForm' => $form->createView(),
        ]);
    }

    /**
     * Processes the sending of the password reset email.
     */
    private function processSendingPasswordResetEmail(string $emailFormData, MailerInterface $mailer, TranslatorInterface $translator): RedirectResponse
    {
        /** @var UtilisateurRepository $userRepository */
        $userRepository = $this->entityManager->getRepository(Utilisateur::class);
        /** @var Utilisateur|null $user */
        $user = $userRepository->findOneBy(['email' => $emailFormData]);

        // Do not reveal whether a user account was found or not for security reasons.
        // Always redirect to the check-email page.
        if (!$user) {
            $this->logger?->info('Password reset requested for non-existent email: ' . $emailFormData);
            // Add a generic flash message *if* the user was found, otherwise fail silently.
            // This message will be shown on the check_email page.
            // $this->addFlash('reset_password_check_email_notice', 'Si un compte correspond à cet email, un lien de réinitialisation a été envoyé.');
            return $this->redirectToRoute('app_check_email');
        }

        // Prevent reset for inactive or unverified users
        if (!$user->isActive() || !$user->isVerified()) {
            $this->logger?->warning('Password reset requested for inactive/unverified user: ' . $emailFormData);
            $this->addFlash('reset_password_error', 'Impossible de réinitialiser le mot de passe pour ce compte (inactif ou non vérifié).');
            return $this->redirectToRoute('app_forgot_password_request'); // Go back to request form
        }

        try {
            // Generate the reset token for the user.
            $resetToken = $this->resetPasswordHelper->generateResetToken($user);
        } catch (ResetPasswordExceptionInterface $e) {
            // Log the error if token generation fails (e.g., due to throttling).
            $this->logger?->error('Error generating password reset token: ' . $e->getReason());

            // Show a generic message to the user, even if an error occurred.
            // $this->addFlash('reset_password_check_email_notice', 'Si un compte correspond à cet email, un lien de réinitialisation a été envoyé.');
            $this->addFlash('reset_password_error', sprintf( // Optionally show detailed error reason
                '%s - %s',
                $translator->trans(ResetPasswordExceptionInterface::MESSAGE_PROBLEM_HANDLE, [], 'ResetPasswordBundle'),
                $translator->trans($e->getReason(), [], 'ResetPasswordBundle')
            ));
            return $this->redirectToRoute('app_check_email');
        }

        // Create the password reset email.
        $email = (new TemplatedEmail())
            // MAKE SURE TO SET SENDER EMAIL/NAME IN .env or services.yaml or here
            ->from(new Address($this->getParameter('app.mail_sender_address'), $this->getParameter('app.mail_sender_name')))
            ->to(new Address($user->getEmail(), $user->getFullName()))
            ->subject('Votre demande de réinitialisation de mot de passe - TrottiCare')
            ->htmlTemplate('reset_password/email.html.twig') // Template for the email body
            ->context([
                'resetToken' => $resetToken, // Pass the token object to the template
                'tokenLifetime' => $this->resetPasswordHelper->getTokenLifetime(), // Pass lifetime
            ]);

        try {
            // Send the email.
            $mailer->send($email);
            // Store the token object in session *after* the email is sent successfully.
            $this->setTokenObjectInSession($resetToken);
        } catch (TransportExceptionInterface $e) {
            // Handle email sending errors.
            $this->logger?->error('Password reset email sending failed: ' . $e->getMessage());
            $this->addFlash('reset_password_error', 'Une erreur est survenue lors de l\'envoi de l\'email. Veuillez réessayer.');
            // Don't redirect to check_email if the email failed to send
            return $this->redirectToRoute('app_forgot_password_request');
        }

        // Redirect to the check-email page after sending the email successfully.
        return $this->redirectToRoute('app_check_email');
    }
}