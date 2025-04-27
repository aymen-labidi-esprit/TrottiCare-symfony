<?php
// src/Controller/Admin/UtilisateurController.php
namespace App\Controller\Admin;

use App\Entity\Utilisateur;
use App\Form\AdminUserType; // Use the specific Admin form
use App\Form\UserFilterType; // Use the filter form
use App\Repository\UtilisateurRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;

#[Route('/admin/utilisateurs')] // Base route for admin user management
#[IsGranted('ROLE_ADMIN')] // Ensure only admins can access
class UtilisateurController extends AbstractController
{
    private UserPasswordHasherInterface $passwordHasher;
    private EntityManagerInterface $entityManager;

    public function __construct(UserPasswordHasherInterface $passwordHasher, EntityManagerInterface $entityManager)
    {
        $this->passwordHasher = $passwordHasher;
        $this->entityManager = $entityManager;
    }

    #[Route('/', name: 'admin_utilisateur_index', methods: ['GET'])]
    public function index(Request $request, UtilisateurRepository $utilisateurRepository): Response
    {
        $filterForm = $this->createForm(UserFilterType::class);
        $filterForm->handleRequest($request);

        $pagination = $utilisateurRepository->findByCriteria(
            $filterForm->isSubmitted() && $filterForm->isValid() ? $filterForm->getData() : [],
            $request->query->getInt('page', 1),
            15 // Items per page
        );

        return $this->render('admin/utilisateur/index.html.twig', [
            'pagination' => $pagination, // Pass the Paginator object
            'filterForm' => $filterForm->createView(),
        ]);
    }

    #[Route('/new', name: 'admin_utilisateur_new', methods: ['GET', 'POST'])]
    public function new(Request $request): Response
    {
        $utilisateur = new Utilisateur();
        // Set default role if needed, e.g., $utilisateur->setRoleInterne('client');
        $form = $this->createForm(AdminUserType::class, $utilisateur);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Handle password
            $plainPassword = $form->get('plainPassword')->getData();
            if (!empty($plainPassword)) {
                $hashedPassword = $this->passwordHasher->hashPassword(
                    $utilisateur,
                    $plainPassword
                );
                $utilisateur->setPassword($hashedPassword);
            } else {
                // Handle case where password is required for new user but left empty
                // This shouldn't happen if constraints are set, but good practice
                $this->addFlash('danger', 'Le mot de passe est obligatoire pour un nouvel utilisateur.');
                return $this->render('admin/utilisateur/new.html.twig', [
                    'utilisateur' => $utilisateur,
                    'form' => $form->createView(),
                ]);
            }

            // Set default verification status if needed, e.g., $utilisateur->setIsVerified(true);
            // Or trigger verification email flow

            $this->entityManager->persist($utilisateur);
            $this->entityManager->flush();

            $this->addFlash('success', 'Utilisateur créé avec succès.');

            return $this->redirectToRoute('admin_utilisateur_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('admin/utilisateur/new.html.twig', [
            'utilisateur' => $utilisateur,
            'form' => $form->createView(),
        ]);
    }

    #[Route('/{id}', name: 'admin_utilisateur_show', methods: ['GET'])]
    public function show(Utilisateur $utilisateur): Response
    {
        // Prevent admins from showing their own profile via this route? Optional.
        // if ($utilisateur === $this->getUser()) { ... }

        return $this->render('admin/utilisateur/show.html.twig', [
            'utilisateur' => $utilisateur,
        ]);
    }

    #[Route('/{id}/edit', name: 'admin_utilisateur_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Utilisateur $utilisateur): Response
    {
        // Prevent admins from editing their own profile via this route? Optional.
        //if ($utilisateur === $this->getUser()) {
        //   $this->addFlash('warning', 'Pour modifier votre propre profil, utilisez la section Mon Profil.');
        //   return $this->redirectToRoute('admin_utilisateur_index');
        //}

        $form = $this->createForm(AdminUserType::class, $utilisateur);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Handle password update ONLY if a new one was entered
            $plainPassword = $form->get('plainPassword')->getData();
            if (!empty($plainPassword)) {
                $hashedPassword = $this->passwordHasher->hashPassword(
                    $utilisateur,
                    $plainPassword
                );
                $utilisateur->setPassword($hashedPassword);
            }

            $this->entityManager->flush();

            $this->addFlash('success', 'Utilisateur mis à jour avec succès.');

            return $this->redirectToRoute('admin_utilisateur_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('admin/utilisateur/edit.html.twig', [
            'utilisateur' => $utilisateur,
            'form' => $form->createView(),
        ]);
    }

    #[Route('/{id}', name: 'admin_utilisateur_delete', methods: ['POST'])]
    public function delete(Request $request, Utilisateur $utilisateur): Response
    {
        // Prevent admins from deleting themselves
        if ($utilisateur === $this->getUser()) {
            $this->addFlash('danger', 'Vous ne pouvez pas supprimer votre propre compte administrateur.');
            return $this->redirectToRoute('admin_utilisateur_index');
        }

        if ($this->isCsrfTokenValid('delete'.$utilisateur->getId(), $request->request->get('_token'))) {
            try {
                $this->entityManager->remove($utilisateur);
                $this->entityManager->flush();
                $this->addFlash('success', 'Utilisateur supprimé avec succès.');
            } catch (\Exception $e) {
                // Catch potential DB constraint issues if user has related records
                $this->addFlash('danger', 'Impossible de supprimer l\'utilisateur. Il est peut-être lié à d\'autres enregistrements (réservations, etc.). Détails: ' . $e->getMessage());
            }
        } else {
            $this->addFlash('danger', 'Token CSRF invalide.');
        }


        return $this->redirectToRoute('admin_utilisateur_index', [], Response::HTTP_SEE_OTHER);
    }
}