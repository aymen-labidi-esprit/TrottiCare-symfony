<?php
namespace App\Controller;

use App\Entity\Utilisateur;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface; // Still useful for hashing
use Symfony\Component\Validator\Validator\ValidatorInterface; // Use Validator component
use App\Form\RegistrationFormType;

class RegistrationController extends AbstractController
{
    public function register(Request $request, EntityManagerInterface $entityManager, ValidatorInterface $validator, UserPasswordHasherInterface $passwordHasher): Response
    {
        // !!! WARNING: INSECURE REGISTRATION !!!
        // Lacks email verification, proper error handling, CSRF protection (if not using Form component fully) etc.

        $user = new Utilisateur();
        $form = $this->createForm(RegistrationFormType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            // Get password from form data (not mapped directly)
            $plainPassword = $form->get('plainPassword')->getData();

            if (empty($plainPassword)) {
                // Add validation error manually if needed, though RepeatedType handles mismatch
                $this->addFlash('danger', 'Le mot de passe ne peut pas être vide.');
                return $this->render('registration/register.html.twig', [
                    'registrationForm' => $form->createView(),
                ]);
            }

            // Hash password using PHP's native functions or the Hasher service
            // $hashedPassword = password_hash($plainPassword, PASSWORD_BCRYPT);
            // Or use Symfony's hasher for consistency if available
            $hashedPassword = $passwordHasher->hashPassword($user, $plainPassword);
            $user->setPassword($hashedPassword);


            // Persist the user
            try {
                $entityManager->persist($user);
                $entityManager->flush();

                $this->addFlash('success', 'Inscription réussie ! Vous pouvez maintenant vous connecter (simulation).');
                // Redirect to login (no auto-login here)
                return $this->redirectToRoute('app_login');

            } catch (\Exception $e) {
                // Catch potential database errors (like unique email constraint)
                $this->addFlash('danger', 'Erreur lors de l\'inscription: ' . $e->getMessage());
            }

        } elseif ($form->isSubmitted()) {
            // Form is submitted but not valid
            $this->addFlash('danger', 'Le formulaire contient des erreurs. Veuillez vérifier les champs.');
        }

        return $this->render('registration/register.html.twig', [
            'registrationForm' => $form->createView(),
        ]);
    }
}