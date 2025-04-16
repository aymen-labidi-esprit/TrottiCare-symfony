<?php

namespace App\Controller;

use App\Entity\Reclamation;
use App\Form\ReclamationType;
use App\Repository\ReclamationRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FrontController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function index(): Response
    {
        return $this->render('index.html.twig');
    }

    // Route pour créer une réclamation
    #[Route('/reclamation/create', name: 'create_reclamation')]
    public function createReclamation(Request $request, EntityManagerInterface $entityManager): Response
    {
        $reclamation = new Reclamation();
        $form = $this->createForm(ReclamationType::class, $reclamation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($reclamation);
            $entityManager->flush();

            $this->addFlash('success', 'Réclamation créée avec succès.');
            return $this->redirectToRoute('reclamation_list');
        }

        return $this->render('create_reclamation.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    // Liste des réclamations
    #[Route('/reclamations', name: 'reclamation_list')]
    public function listReclamations(ReclamationRepository $repo): Response
    {
        $reclamations = $repo->findBy([], ['date_creation' => 'DESC']);
        return $this->render('list_reclamations.html.twig', [
            'reclamations' => $reclamations,
        ]);
    }

    // Afficher une réclamation
    #[Route('/reclamations/{id}', name: 'show_reclamation')]
    public function showReclamation(Reclamation $reclamation): Response
    {
        return $this->render('show_reclamation.html.twig', [
            'reclamation' => $reclamation,
            'reponses' => $reclamation->getReponses(),
        ]);
    }

    // ✅ Modifier une réclamation côté Front
    #[Route('/reclamation/{id}/edit', name: 'edit_reclamation_front')]
    public function editReclamationFront(
        int $id,
        ReclamationRepository $reclamationRepository,
        Request $request,
        EntityManagerInterface $entityManager
    ): Response {
        $reclamation = $reclamationRepository->find($id);

        if (!$reclamation) {
            $this->addFlash('error', 'Réclamation introuvable.');
            return $this->redirectToRoute('reclamation_list');
        }

        $form = $this->createForm(ReclamationType::class, $reclamation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();
            $this->addFlash('success', 'Réclamation modifiée avec succès.');
            return $this->redirectToRoute('reclamation_list');
        }

        return $this->render('edit_reclamation.html.twig', [
            'form' => $form->createView(),
            'reclamation' => $reclamation,
        ]);
    }

    // ✅ Supprimer une réclamation côté Front
    #[Route('/reclamation/{id}/delete', name: 'delete_reclamation_front')]
    public function deleteReclamationFront(
        int $id,
        ReclamationRepository $reclamationRepository,
        EntityManagerInterface $entityManager
    ): Response {
        $reclamation = $reclamationRepository->find($id);

        if (!$reclamation) {
            $this->addFlash('error', 'Réclamation introuvable.');
            return $this->redirectToRoute('reclamation_list');
        }

        $entityManager->remove($reclamation);
        $entityManager->flush();

        $this->addFlash('success', 'Réclamation supprimée avec succès.');
        return $this->redirectToRoute('reclamation_list');
    }
}
