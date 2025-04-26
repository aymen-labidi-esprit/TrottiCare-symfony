<?php
namespace App\Controller\Client;

use App\Form\ProfileType; // Create this form
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface; // Optional for password change

#[Route('/mon-profil')]
#[IsGranted('ROLE_USER')]
class ProfileController extends AbstractController
{
    #[Route('', name: 'app_client_profile_view')]
    public function view(): Response
    {
        return $this->render('client/profile/view.html.twig', [
            'utilisateur' => $this->getUser(),
        ]);
    }

    #[Route('/edit', name: 'app_client_profile_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, EntityManagerInterface $entityManager, UserPasswordHasherInterface $passwordHasher): Response
    {
        $user = $this->getUser();
        if (!$user instanceof \App\Entity\Utilisateur) {
            return $this->redirectToRoute('app_login'); // Should not happen
        }

        $form = $this->createForm(ProfileType::class, $user); // Create ProfileType form
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Optional: Handle password change if included in ProfileType
            // $plainPassword = $form->get('plainPassword')->getData();
            // if ($plainPassword) {
            //     $user->setPassword($passwordHasher->hashPassword($user, $plainPassword));
            // }

            $entityManager->flush();
            $this->addFlash('success', 'Profil mis à jour avec succès.');
            return $this->redirectToRoute('app_client_profile_view');
        }

        return $this->render('client/profile/edit.html.twig', [
            'utilisateur' => $user,
            'profileForm' => $form->createView(),
        ]);
    }
}