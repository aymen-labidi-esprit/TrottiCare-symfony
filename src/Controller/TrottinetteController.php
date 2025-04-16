<?php

namespace App\Controller;

use App\Entity\Trottinette;
use App\Entity\Utilisateur;
use App\Form\TrottinetteType;
use App\Repository\TrottinetteRepository;
use App\Repository\UtilisateurRepository;
use App\Service\DataFixturesService;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Form\FormError;

#[Route('/trottinette')]
class TrottinetteController extends AbstractController
{
    private DataFixturesService $dataFixturesService;

    public function __construct(DataFixturesService $dataFixturesService)
    {
        $this->dataFixturesService = $dataFixturesService;
    }

    #[Route('/', name: 'app_trottinette_index', methods: ['GET'])]
    public function index(TrottinetteRepository $trottinetteRepository): Response
    {
        return $this->render('trottinette/index.html.twig', [
            'trottinettes' => $trottinetteRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_trottinette_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager, UtilisateurRepository $utilisateurRepository): Response
    {
        $trottinette = new Trottinette();
        
        // Set default values
        $defaultPointRelaisId = $this->dataFixturesService->getDefaultPointRelaisId();
        $trottinette->setPointRelaisId($defaultPointRelaisId);
        
        $defaultUserId = $this->dataFixturesService->getDefaultUserId();
        if ($defaultUserId) {
            $utilisateur = $utilisateurRepository->find($defaultUserId);
            if ($utilisateur) {
                $trottinette->setUtilisateur($utilisateur);
            }
        }
        
        $form = $this->createForm(TrottinetteType::class, $trottinette);
        $form->handleRequest($request);

        if ($form->isSubmitted()) {
            if ($form->isValid()) {
                $trottinette->setDateAjout(new \DateTime());
                
                try {
                    $entityManager->persist($trottinette);
                    $entityManager->flush();
                    $this->addFlash('success', 'La trottinette a été ajoutée avec succès.');
                    return $this->redirectToRoute('app_trottinette_index');
                } catch (\Exception $e) {
                    $this->addFlash('error', 'Erreur lors de l\'ajout de la trottinette: ' . $e->getMessage());
                }
            } else {
                // Do not add flash messages, let the form validation system handle the errors
                
                // For debugging only - add explicit error messages for required fields
                if (empty($trottinette->getModele())) {
                    $form->get('modele')->addError(new FormError('Le modèle est obligatoire'));
                }
                
                if (empty($trottinette->getNumeroSerie())) {
                    $form->get('numeroSerie')->addError(new FormError('Le numéro de série est obligatoire'));
                }
                
                // DO NOT redirect here - stay on the form to show validation errors
            }
        }

        return $this->render('trottinette/new.html.twig', [
            'trottinette' => $trottinette,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_trottinette_show', methods: ['GET'])]
    public function show(Trottinette $trottinette): Response
    {
        return $this->render('trottinette/show.html.twig', [
            'trottinette' => $trottinette,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_trottinette_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Trottinette $trottinette, EntityManagerInterface $entityManager, UtilisateurRepository $utilisateurRepository): Response
    {
        $form = $this->createForm(TrottinetteType::class, $trottinette);
        $form->handleRequest($request);

        if ($form->isSubmitted()) {
            if ($form->isValid()) {
                try {
                    $entityManager->flush();
                    $this->addFlash('success', 'La trottinette a été modifiée avec succès.');
                    return $this->redirectToRoute('app_trottinette_index');
                } catch (\Exception $e) {
                    $this->addFlash('error', 'Erreur lors de la modification de la trottinette: ' . $e->getMessage());
                }
            } else {
                // Do not add flash messages, let the form validation system handle the errors
                
                // For debugging only - add explicit error messages for required fields
                if (empty($trottinette->getModele())) {
                    $form->get('modele')->addError(new FormError('Le modèle est obligatoire'));
                }
                
                if (empty($trottinette->getNumeroSerie())) {
                    $form->get('numeroSerie')->addError(new FormError('Le numéro de série est obligatoire'));
                }
                
                // DO NOT redirect here - stay on the form to show validation errors
            }
        }

        return $this->render('trottinette/edit.html.twig', [
            'trottinette' => $trottinette,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_trottinette_delete', methods: ['POST'])]
    public function delete(Request $request, Trottinette $trottinette, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$trottinette->getId(), $request->request->get('_token'))) {
            $entityManager->remove($trottinette);
            $entityManager->flush();
            $this->addFlash('success', 'La trottinette a été supprimée avec succès.');
        }

        return $this->redirectToRoute('app_trottinette_index');
    }
}