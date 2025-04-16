<?php
// src/Controller/AdminController.php

namespace App\Controller;

use App\Entity\Reclamation;
use App\Entity\Reponse;
use App\Form\AdminReclamationType;
use App\Form\ReponseType;
use App\Repository\ReclamationRepository;
use App\Repository\ReponseRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class AdminController extends AbstractController
{
    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    #[Route('/admin', name: 'admin_dashboard')]
    public function dashboard()
    {
        return $this->render('dashboard.html.twig');
    }

    #[Route('/admin/reclamations', name: 'admin_reclamations')]
    public function manageReclamations(ReclamationRepository $reclamationRepository): Response
    {
        $reclamations = $reclamationRepository->findAll();
        return $this->render('manage_reclamations.html.twig', [
            'reclamations' => $reclamations
        ]);
    }

    #[Route('/admin/reclamation/{id}/edit', name: 'edit_reclamation')]
    public function editReclamation(int $id, ReclamationRepository $reclamationRepository, Request $request): Response
    {
        $reclamation = $reclamationRepository->find($id);

        if (!$reclamation) {
            $this->addFlash('error', 'Réclamation non trouvée.');
            return $this->redirectToRoute('admin_reclamations');
        }

        $form = $this->createForm(AdminReclamationType::class, $reclamation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->entityManager->flush();
            $this->addFlash('success', 'Réclamation modifiée avec succès.');
            return $this->redirectToRoute('admin_reclamations');
        }

        return $this->render('edit_reclamation.html.twig', [
            'form' => $form->createView(),
            'reclamation' => $reclamation,
        ]);
    }

    #[Route('/admin/reclamation/{id}/delete', name: 'delete_reclamation')]
    public function deleteReclamation(int $id, ReclamationRepository $reclamationRepository): Response
    {
        $reclamation = $reclamationRepository->find($id);

        if (!$reclamation) {
            $this->addFlash('error', 'Réclamation non trouvée.');
            return $this->redirectToRoute('admin_reclamations');
        }

        $this->entityManager->remove($reclamation);
        $this->entityManager->flush();

        $this->addFlash('success', 'Réclamation supprimée avec succès.');
        return $this->redirectToRoute('admin_reclamations');
    }

    #[Route('/admin/reclamation/{id}/add_response', name: 'add_response')]
    public function addResponse(int $id, Request $request, ReclamationRepository $reclamationRepository): Response
    {
        $reclamation = $reclamationRepository->find($id);

        if (!$reclamation) {
            $this->addFlash('error', 'Réclamation non trouvée.');
            return $this->redirectToRoute('admin_reclamations');
        }

        $response = new Reponse();
        $form = $this->createForm(ReponseType::class, $response);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $response->setReclamation($reclamation);
            $response->setDateReponse(new \DateTime());

            $this->entityManager->persist($response);
            $this->entityManager->flush();

            $this->addFlash('success', 'Réponse ajoutée avec succès.');
            return $this->redirectToRoute('admin_reclamations');
        }

        return $this->render('add_response.html.twig', [
            'form' => $form->createView(),
            'reclamation' => $reclamation
        ]);
    }

    #[Route('/admin/reclamation/{id}/responses', name: 'view_responses')]
    public function viewResponses(int $id, ReclamationRepository $reclamationRepository, ReponseRepository $reponseRepository): Response
    {
        $reclamation = $reclamationRepository->find($id);

        if (!$reclamation) {
            $this->addFlash('error', 'Réclamation non trouvée.');
            return $this->redirectToRoute('admin_reclamations');
        }

        $responses = $reponseRepository->findBy(['reclamation' => $reclamation]);

        return $this->render('view_responses.html.twig', [
            'reclamation' => $reclamation,
            'responses' => $responses
        ]);
    }

    #[Route('/admin/response/{id}/edit', name: 'edit_response')]
    public function editResponse(int $id, Request $request, ReponseRepository $reponseRepository): Response
    {
        $response = $reponseRepository->find($id);

        if (!$response) {
            $this->addFlash('error', 'Réponse non trouvée.');
            return $this->redirectToRoute('admin_reclamations');
        }

        $form = $this->createForm(ReponseType::class, $response);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->entityManager->flush();
            $this->addFlash('success', 'Réponse modifiée avec succès.');

            return $this->redirectToRoute('view_responses', [
                'id' => $response->getReclamation()->getId()
            ]);
        }

        return $this->render('edit_response.html.twig', [
            'form' => $form->createView(),
            'response' => $response
        ]);
    }

    #[Route('/admin/response/{id}/delete', name: 'delete_response')]
    public function deleteResponse(int $id, ReponseRepository $reponseRepository): Response
    {
        $response = $reponseRepository->find($id);

        if (!$response) {
            $this->addFlash('error', 'Réponse non trouvée.');
            return $this->redirectToRoute('admin_reclamations');
        }

        $reclamationId = $response->getReclamation()->getId();

        $this->entityManager->remove($response);
        $this->entityManager->flush();

        $this->addFlash('success', 'Réponse supprimée avec succès.');
        return $this->redirectToRoute('view_responses', [
            'id' => $reclamationId
        ]);
    }
}
