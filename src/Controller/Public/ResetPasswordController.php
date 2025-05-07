<?php
// src/Controller/Public/ResetPasswordController.php
namespace App\Controller\Public;

use App\Entity\Utilisateur;
use App\Form\ChangePasswordFormType;
use App\Form\ResetPasswordRequestFormType;
use App\Repository\UtilisateurRepository;
use Doctrine\ORM\EntityManagerInterface;
use Psr\Log\LoggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Contracts\HttpClient\HttpClientInterface; // <--- CORRECT NAMESPACE
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mailer\MailerInterface; // Keep for type hinting if needed elsewhere, but not used for sending here
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface; // <-- Import URL Generator
use Symfony\Contracts\Translation\TranslatorInterface;
use SymfonyCasts\Bundle\ResetPassword\Controller\ResetPasswordControllerTrait;
use SymfonyCasts\Bundle\ResetPassword\Exception\ResetPasswordExceptionInterface;
use SymfonyCasts\Bundle\ResetPassword\ResetPasswordHelperInterface;

#[Route('/reset-password')]
class ResetPasswordController extends AbstractController
{
    use ResetPasswordControllerTrait;

    private ResetPasswordHelperInterface $resetPasswordHelper;
    private EntityManagerInterface $entityManager;
    private HttpClientInterface $httpClient;        // <-- Inject HttpClient
    private UrlGeneratorInterface $urlGenerator;      // <-- Inject UrlGenerator
    private LoggerInterface $logger;

    public function __construct(
        ResetPasswordHelperInterface $resetPasswordHelper,
        EntityManagerInterface $entityManager,
        HttpClientInterface $httpClient,          // <-- Add HttpClient
        UrlGeneratorInterface $urlGenerator,        // <-- Add UrlGenerator
        LoggerInterface $logger
    ) {
        $this->resetPasswordHelper = $resetPasswordHelper;
        $this->entityManager = $entityManager;
        $this->httpClient = $httpClient;          // <-- Assign HttpClient
        $this->urlGenerator = $urlGenerator;        // <-- Assign UrlGenerator
        $this->logger = $logger;
    }

    /**
     * Display & process form to request a password reset.
     */
    #[Route('', name: 'app_forgot_password_request', methods: ['GET', 'POST'])]
    public function request(Request $request, TranslatorInterface $translator): Response
    {

        if ($this->getUser()) {
            return $this->redirectToRoute('app_home');
        }

        $form = $this->createForm(ResetPasswordRequestFormType::class);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Call the method that handles token generation and webhook call
            return $this->processSendingPasswordResetWebhook(
                $form->get('email')->getData(),
                $translator
            );
        }

        return $this->render('reset_password/request.html.twig', [
            'requestForm' => $form->createView()
//            'recaptcha_v2_site_key' => $this->getParameter('env(RECAPTCHA_V2_SITE_KEY)'),
        ]);
    }

    /**
     * Confirmation page after a user has requested a password reset.
     */
    #[Route('/check-email', name: 'app_check_email', methods: ['GET'])]
    public function checkEmail(): Response
    {
        // Generate a fake token if the user does not exist or someone hit this page directly.
        if (null === ($resetToken = $this->getTokenObjectFromSession())) {
            $resetToken = $this->resetPasswordHelper->generateFakeResetToken();
        }

        return $this->render('reset_password/check_email.html.twig', [
            'resetToken' => $resetToken,
            'tokenLifetime' => $this->resetPasswordHelper->getTokenLifetime(),
        ]);
    }

    /**
     * Validates and process the reset URL that the user clicked in their email.
     */
    #[Route('/reset/{token}', name: 'app_reset_password', methods: ['GET', 'POST'])]
    public function reset(Request $request, UserPasswordHasherInterface $passwordHasher, TranslatorInterface $translator, string $token = null): Response
    {
        if ($this->getUser()) {
            return $this->redirectToRoute('app_home');
        }

        if ($token) {
            $this->storeTokenInSession($token);
            return $this->redirectToRoute('app_reset_password');
        }

        $token = $this->getTokenFromSession();
        if (null === $token) {
            throw $this->createNotFoundException('No reset password token found in the URL or in the session.');
        }

        try {
            /** @var Utilisateur $user */
            $user = $this->resetPasswordHelper->validateTokenAndFetchUser($token);
        } catch (ResetPasswordExceptionInterface $e) {
            $this->addFlash('reset_password_error', sprintf(
                '%s - %s',
                $translator->trans(ResetPasswordExceptionInterface::MESSAGE_PROBLEM_VALIDATE, [], 'ResetPasswordBundle'),
                $translator->trans($e->getReason(), [], 'ResetPasswordBundle')
            ));
            return $this->redirectToRoute('app_forgot_password_request');
        }

        // The token is valid; allow the user to change their password.
        $form = $this->createForm(ChangePasswordFormType::class);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->resetPasswordHelper->removeResetRequest($token);
            $encodedPassword = $passwordHasher->hashPassword($user, $form->get('plainPassword')->getData());
            $user->setPassword($encodedPassword);
            $this->entityManager->flush();
            $this->cleanSessionAfterReset();

            $this->addFlash('success', 'Votre mot de passe a été réinitialisé avec succès.');
            return $this->redirectToRoute('app_login_page');
        }

        return $this->render('reset_password/reset.html.twig', [
            'resetForm' => $form->createView(),
        ]);
    }

    /**
     * Processes the request and triggers the Maker Webhook directly.
     */
    private function processSendingPasswordResetWebhook(string $emailFormData, TranslatorInterface $translator): RedirectResponse
    {
        /** @var UtilisateurRepository $userRepository */
        $userRepository = $this->entityManager->getRepository(Utilisateur::class);
        /** @var Utilisateur|null $user */
        $user = $userRepository->findOneBy(['email' => $emailFormData]);

        // Do not reveal whether a user account was found or not.
        if (!$user) {
            $this->logger->info('Password reset requested for non-existent email: ' . $emailFormData);
            return $this->redirectToRoute('app_check_email');
        }

        // Prevent reset for inactive or unverified users
        if (!$user->isActive() || !$user->isVerified()) {
            $this->logger->warning('Password reset requested for inactive/unverified user: ' . $emailFormData);
            $this->addFlash('reset_password_error', 'Impossible de réinitialiser le mot de passe pour ce compte (inactif ou non vérifié).');
            return $this->redirectToRoute('app_check_email');
        }

        try {
            $resetToken = $this->resetPasswordHelper->generateResetToken($user);
        } catch (ResetPasswordExceptionInterface $e) {
            $this->logger->error('Error generating password reset token: ' . $e->getReason());
            $this->addFlash('reset_password_error', sprintf(
                '%s - %s',
                $translator->trans(ResetPasswordExceptionInterface::MESSAGE_PROBLEM_HANDLE, [], 'ResetPasswordBundle'),
                $translator->trans($e->getReason(), [], 'ResetPasswordBundle')
            ));
            return $this->redirectToRoute('app_check_email');
        }

        // --- Trigger Maker Webhook ---
        $makerWebhookUrl = "https://hook.eu2.make.com/5eelpvj9qe47sljh99bfollai01xg1ex"; // Get URL from .env
        if (empty($makerWebhookUrl)) {
            $this->logger->error('MAKER_WEBHOOK_URL environment variable is not set.');
            $this->addFlash('danger', 'Erreur de configuration serveur, impossible d\'envoyer l\'email de réinitialisation.');
            return $this->redirectToRoute('app_forgot_password_request'); // Go back to request page on config error
        }

        // Generate the ABSOLUTE reset URL using the injected UrlGenerator
        $resetUrl = $this->urlGenerator->generate('app_reset_password', [
            'token' => $resetToken->getToken(),
        ], UrlGeneratorInterface::ABSOLUTE_URL);

        // Prepare payload for Maker Webhook (adjust keys based on your Maker service)
        $payload = [
            'value1' => $user->getEmail(),       // e.g., Recipient email
            'value2' => $user->getPrenom() ?? $user->getEmail(), // e.g., User's name
            'value3' => $resetUrl,              // e.g., The reset link
            // You could add more values if your Maker service needs them
            // 'value4' => ceil($this->resetPasswordHelper->getTokenLifetime() / 3600) // e.g., lifetime in hours
        ];

        try {
            // Use the injected httpClient to make the request
            $response = $this->httpClient->request('POST', $makerWebhookUrl, [
                'json' => $payload, // Sending as JSON is common
                // Or use 'body' => $payload for form-encoded
            ]);

            // Check webhook response status (optional but good for debugging)
            if ($response->getStatusCode() >= 300) {
                $this->logger->error(sprintf('Maker Webhook call failed for user %s. Status: %d, Response: %s', $user->getEmail(), $response->getStatusCode(), $response->getContent(false)));
                // Decide if you want to show an error or still proceed
                // For a simple project, maybe just log it and proceed
                // $this->addFlash('danger', 'Erreur lors de la communication avec le service d\'envoi.');
                // return $this->redirectToRoute('app_forgot_password_request');
            } else {
                $this->logger->info(sprintf('Maker Webhook triggered successfully for user %s.', $user->getEmail()));
            }

        } catch (\Symfony\Contracts\HttpClient\Exception\TransportExceptionInterface $e) {
            $this->logger->error('Maker Webhook transport error: ' . $e->getMessage());
            // Decide if you want to show an error or still proceed
            // $this->addFlash('danger', 'Erreur réseau lors de la tentative d\'envoi.');
            // return $this->redirectToRoute('app_forgot_password_request');
        } catch (\Exception $e) { // Catch other potential errors
            $this->logger->error('Error triggering Maker Webhook: ' . $e->getMessage());
            // $this->addFlash('danger', 'Une erreur inattendue est survenue.');
            // return $this->redirectToRoute('app_forgot_password_request');
        }

        // --- END Trigger Maker Webhook ---

        // Store token in session REGARDLESS of webhook success/failure for this simplified approach
        // The user needs to be able to reset password even if email sending fails sometimes
        $this->setTokenObjectInSession($resetToken);

        // Redirect to the check-email page
        return $this->redirectToRoute('app_check_email');
    }
}