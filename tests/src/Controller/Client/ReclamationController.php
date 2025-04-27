<?php

namespace App\Controller\Client;

use App\Entity\Reponse; // Importer l'entité Reponse
use App\Form\ReponseType; // Importer le formulaire Reponse
use App\Entity\Reclamation;
use App\Form\ReclamationType;
use App\Repository\ReclamationRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/reclamation')]
class ReclamationController extends AbstractController
{
    // Route pour afficher toutes les réclamations
    #[Route('', name: 'reclamation_index', methods: ['GET'])]
    public function index(ReclamationRepository $reclamationRepository): Response
    {
        return $this->render('reclamation/index.html.twig', [
            'reclamations' => $reclamationRepository->findAll(),
        ]);
    }

    // Route pour la création d'une nouvelle réclamation
    #[Route('/new', name: 'reclamation_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $em): Response
    {
        $reclamation = new Reclamation();

        // Associer l'utilisateur connecté à la réclamation
        if ($this->getUser()) {
            $reclamation->setUtilisateur($this->getUser());
        } else {
            // Si pas connecté, rediriger vers la page de connexion
            $this->addFlash('error', 'Vous devez être connecté pour créer une réclamation.');
            return $this->redirectToRoute('app_login');
        }

        $form = $this->createForm(ReclamationType::class, $reclamation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            if ($reclamation->getDateCreation() === null) {
                $reclamation->setDateCreation(new \DateTime());
            }

            $em->persist($reclamation);
            $em->flush();

            $this->addFlash('success', 'Réclamation créée avec succès.');
            return $this->redirectToRoute('reclamation_index');
        }

        return $this->render('reclamation/new.html.twig', [
            'form' => $form->createView(),
        ]);
    }
    // Route pour afficher une réclamation spécifique
    #[Route('/{id}', name: 'reclamation_show', methods: ['GET'])]
    public function show(Reclamation $reclamation): Response
    {
        return $this->render('reclamation/show.html.twig', [
            'reclamation' => $reclamation,
        ]);
    }

    // Route pour modifier une réclamation existante
    #[Route('/{id}/edit', name: 'reclamation_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Reclamation $reclamation, EntityManagerInterface $em): Response
    {
        $form = $this->createForm(ReclamationType::class, $reclamation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em->flush();

            $this->addFlash('success', 'Réclamation mise à jour.');
            return $this->redirectToRoute('reclamation_index');
        }

        return $this->render('reclamation/edit.html.twig', [
            'reclamation' => $reclamation,
            'form' => $form->createView(),
        ]);
    }

    // Route pour supprimer une réclamation
    #[Route('/{id}', name: 'reclamation_delete', methods: ['POST'])]
    public function delete(Request $request, Reclamation $reclamation, EntityManagerInterface $em): Response
    {
        if ($this->isCsrfTokenValid('delete'.$reclamation->getId(), $request->request->get('_token'))) {
            $em->remove($reclamation);
            $em->flush();

            $this->addFlash('success', 'Réclamation supprimée.');
        }

        return $this->redirectToRoute('reclamation_index');
    }

    // Route pour répondre à une réclamation spécifique
    #[Route('/reclamation/{id}/repondre', name: 'reclamation_repondre', methods: ['GET', 'POST'])]
    public function repondre(Request $request, Reclamation $reclamation, EntityManagerInterface $em): Response
    {
        // Crée une nouvelle réponse
        $reponse = new Reponse();
        $reponse->setReclamation($reclamation);
        $reponse->setAuteur($this->getUser()); // Assigner l'auteur de la réponse (l'utilisateur connecté)

        // Créer et gérer le formulaire
        $form = $this->createForm(ReponseType::class, $reponse);
        $form->handleRequest($request);

        // Si le formulaire est soumis et valide
        if ($form->isSubmitted() && $form->isValid()) {
            $em->persist($reponse);
            $em->flush();  // Sauvegarde la réponse dans la base de données

            $this->addFlash('success', 'Votre réponse a été ajoutée avec succès.');

            return $this->redirectToRoute('reclamation_show', ['id' => $reclamation->getId()]);
        }

        // Rendu du formulaire de réponse
        return $this->render('reclamation/repondre.html.twig', [
            'form' => $form->createView(),
            'reclamation' => $reclamation,
        ]);
    }

}