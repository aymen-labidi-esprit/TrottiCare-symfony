<?php
// src/Controller/RegistrationController.php

namespace App\Controller;

use App\Entity\Utilisateur;
use App\Form\RegistrationFormType;
use App\Security\EmailVerifier; // Import EmailVerifier
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bridge\Twig\Mime\TemplatedEmail; // For email template
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mime\Address; // For email address
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Annotation\Route;
// use SymfonyCasts\Bundle\VerifyEmail\Exception\VerifyEmailExceptionInterface; // Import if handling exceptions here

class RegistrationController extends AbstractController
{
    private EmailVerifier $emailVerifier;

    // Inject EmailVerifier
    public function __construct(EmailVerifier $emailVerifier)
    {
        $this->emailVerifier = $emailVerifier;
    }

    #[Route('/inscription', name: 'app_register', methods: ['GET', 'POST'])]
    public function register(Request $request, UserPasswordHasherInterface $passwordHasher, EntityManagerInterface $entityManager): Response
    {
        // Redirect if already logged in
        if ($this->getUser()) {
            return $this->redirectToRoute('app_home'); // Or client dashboard
        }

        $user = new Utilisateur();
        $form = $this->createForm(RegistrationFormType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Get plain password from the form
            $plainPassword = $form->get('plainPassword')->getData();

            // Ensure password is not empty (should be caught by constraints, but double-check)
            if (empty($plainPassword)) {
                $this->addFlash('danger', 'Le mot de passe ne peut être vide.');
                return $this->render('registration/register.html.twig', [
                    'registrationForm' => $form->createView(),
                ]);
            }

            // Encode the plain password
            $user->setPassword(
                $passwordHasher->hashPassword(
                    $user,
                    $plainPassword
                )
            );

            // Set default role (e.g., 'client')
            $user->setRoleInterne('client'); // Use the setter for internal role string
            $user->setIsVerified(false); // User starts as unverified
            $user->setIsActive(true); // User starts as active

            // --- REMOVE FACE EMBEDDING LOGIC ---
            // $faceEmbeddingString = $form->get('face_embedding_data')->getData();
            // if (!empty($faceEmbeddingString)) {
            //     $user->setFaceEmbedding($faceEmbeddingString); // Save the embedding string
            // } else {
            //     // This should not happen if JS/validation works, but handle it
            //     $this->addFlash('danger', 'Erreur: Données faciales manquantes après validation.');
            //     return $this->render('registration/register.html.twig', [
            //         'registrationForm' => $form->createView(),
            //     ]);
            // }
            // --- END REMOVAL ---

            $entityManager->persist($user);
            $entityManager->flush();

            // Generate a signed URL and email it to the user
            try {
                $this->emailVerifier->sendEmailConfirmation(
                    'app_verify_email', // Route name of your verification action
                    $user,
                    (new TemplatedEmail())
                        ->from(new Address('mailer@yourdomain.com', 'TrottiCare Mail Bot')) // Change sender
                        ->to(new Address($user->getEmail(), $user->getFullName()))
                        ->subject('Veuillez confirmer votre email pour TrottiCare')
                        ->htmlTemplate('registration/confirmation_email.html.twig') // Path to your email template
                );
                $this->addFlash('success', 'Inscription réussie ! Un email de vérification a été envoyé à ' . $user->getEmail() . '. Veuillez cliquer sur le lien pour activer votre compte.');

            } catch (\Symfony\Component\Mailer\Exception\TransportExceptionInterface $e) {
                $this->addFlash('error', 'Impossible d\'envoyer l\'email de vérification. Erreur: ' . $e->getMessage());
                // Consider logging the error more formally
                // Optionally, you might want to remove the user if email fails critically,
                // or mark them for manual verification.
            }


            // Redirect to login page after sending email
            return $this->redirectToRoute('app_login_page');

        } elseif ($form->isSubmitted()) {
            // Add a generic error if submitted but invalid (specific errors are shown by fields)
            $this->addFlash('danger', 'Le formulaire contient des erreurs. Veuillez vérifier.');
        }

        return $this->render('registration/register.html.twig', [
            'registrationForm' => $form->createView(),
        ]);
    }

    // --- ADD EMAIL VERIFICATION ACTION ---
    // This route needs to be defined (e.g., in routes.yaml or here)
    // Make sure it matches the name used in sendEmailConfirmation ('app_verify_email')
    #[Route('/verify/email', name: 'app_verify_email')]
    public function verifyUserEmail(Request $request, EntityManagerInterface $entityManager): Response // Removed UserRepository, not needed directly here if using VerifyEmailHelper
    {
        // This requires the user to be logged in *before* verifying.
        // If you want verification without login, the approach changes slightly (see bundle docs).
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY'); // Ensure user is logged in

        /** @var Utilisateur $user */
        $user = $this->getUser();
        if (!$user) {
            $this->addFlash('danger', 'Utilisateur non trouvé pour la vérification.');
            return $this->redirectToRoute('app_register'); // Or login
        }

        // Validate email confirmation link, sets User::isVerified=true and persists
        try {
            // Use the injected EmailVerifier service
            $this->emailVerifier->handleEmailConfirmation($request, $user); // Pass the user entity
        } catch (\SymfonyCasts\Bundle\VerifyEmail\Exception\VerifyEmailExceptionInterface $exception) {
            $this->addFlash('danger', $exception->getReason()); // Use getReason() for user-friendly messages
            return $this->redirectToRoute('app_register'); // Or login
        }

        // If successful, handleEmailConfirmation already flushes the entity manager

        $this->addFlash('success', 'Votre adresse email a été vérifiée. Vous pouvez maintenant vous connecter.');

        // Redirect to login or maybe client dashboard if you want auto-login after verification
        return $this->redirectToRoute('app_login_page');
    }

}