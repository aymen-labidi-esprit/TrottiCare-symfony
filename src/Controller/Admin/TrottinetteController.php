<?php

// src/Controller/Admin/TrottinetteController.php
namespace App\Controller\Admin;

use App\Entity\Trottinette;
use App\Form\TrottinetteType;
use App\Repository\TrottinetteRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;
use App\Repository\UtilisateurRepository;
use App\Service\DataFixturesService;
use Symfony\Component\HttpFoundation\Response;
use App\Entity\PointRelais;

#[Route('/admin/trottinettes')]
class TrottinetteController extends AbstractController
{
    private $entityManager;
    private DataFixturesService $dataFixturesService;

    public function __construct(EntityManagerInterface $entityManager, DataFixturesService $dataFixturesService)
    {
        $this->entityManager = $entityManager;
        $this->dataFixturesService = $dataFixturesService;
    }

    #[Route('/', name: 'admin_trottinette_index')]
    public function index(Request $request, TrottinetteRepository $repository)
    {

            // Get the criteria from the request or default to an empty array
            $criteria = $request->query->get('criteria');  // Do not pass an array as default
            if (!$criteria) {
                $criteria = [];  // If no 'criteria' is found, default to an empty array
            }
            
            // Continue with the rest of the logic
            $page = $request->query->get('page', 1);
            $limit = $request->query->get('limit', 15);
            
            // Now pass the criteria properly
            $trottinettes = $repository->findByCriteria($criteria, $page, $limit);

        return $this->render('admin/trottinette/index.html.twig', [
            'trottinettes' => $trottinettes,
        ]);
    }

  
    #[Route('/new', name: 'admin_trottinette_new', methods: ['GET', 'POST'])]
    public function new(Request $request, UtilisateurRepository $utilisateurRepository): Response
    {
        $trottinette = new Trottinette();
        
        // Set default values for PointRelais and Utilisateur
        $defaultPointRelaisId = $this->dataFixturesService->getDefaultPointRelaisId();
        $pointRelais = $this->entityManager->getRepository(PointRelais::class)->find($defaultPointRelaisId);
        if ($pointRelais) {
            $trottinette->setPointRelais($pointRelais);
        }
    
        $defaultUserId = $this->dataFixturesService->getDefaultUserId();
        if ($defaultUserId) {
            $utilisateur = $utilisateurRepository->find($defaultUserId);
            if ($utilisateur) {
                $trottinette->setUtilisateur($utilisateur);
            }
        }
        
        // Create the form
        $form = $this->createForm(TrottinetteType::class, $trottinette);
        $form->handleRequest($request);
    
        if ($form->isSubmitted() && $form->isValid()) {
            $trottinette->setDateAjout(new \DateTime()); // Set the date of creation
            
            try {
                $this->entityManager->persist($trottinette);
                $this->entityManager->flush();
                $this->addFlash('success', 'La trottinette a été ajoutée avec succès.');
                return $this->redirectToRoute('admin_trottinette_index');
            } catch (\Exception $e) {
                $this->addFlash('error', 'Erreur lors de l\'ajout de la trottinette: ' . $e->getMessage());
            }
        }
    
        return $this->render('admin/trottinette/new.html.twig', [
            'form' => $form->createView(),
        ]);
    }
    #[Route('/admin/trottinettes/{id}', name: 'admin_trottinette_show', methods: ['GET'])]          
    public function show(int $id, TrottinetteRepository $trottinetteRepository): Response
    {
        // Retrieve the trottinette by its ID
        $trottinette = $trottinetteRepository->find($id);

        // Check if the trottinette exists
        if (!$trottinette) {
            throw $this->createNotFoundException('Trottinette not found');
        }

        // Render the template and pass the trottinette entity
        return $this->render('admin/trottinette/show.html.twig', [
            'trottinette' => $trottinette,
        ]);
    }
    

    #[Route('/{id}/edit', name: 'admin_trottinette_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Trottinette $trottinette, EntityManagerInterface $entityManager, UtilisateurRepository $utilisateurRepository): Response
    {
        $form = $this->createForm(TrottinetteType::class, $trottinette);
        $form->handleRequest($request);

        if ($form->isSubmitted()) {
            if ($form->isValid()) {
                try {
                    $entityManager->flush();
                    $this->addFlash('success', 'La trottinette a été modifiée avec succès.');
                    return $this->redirectToRoute('admin_trottinette_index');
                } catch (\Exception $e) {
                    $this->addFlash('error', 'Erreur lors de la modification de la trottinette: ' . $e->getMessage());
                }
            }
        }    
        return $this->render('admin/trottinette/edit.html.twig', [
            'trottinette' => $trottinette,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'admin_trottinette_delete', methods: ['POST'])]
    public function delete(Request $request, Trottinette $trottinette, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$trottinette->getId(), $request->request->get('_token'))) {
            $entityManager->remove($trottinette);
            $entityManager->flush();
            $this->addFlash('success', 'La trottinette a été supprimée avec succès.');
        }

        return $this->redirectToRoute('admin_trottinette_index');
    }

    // CRUD actions...
}