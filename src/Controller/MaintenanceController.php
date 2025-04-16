<?php

namespace App\Controller;

use App\Entity\Maintenance;
use App\Entity\Trottinette;
use App\Enum\MaintenanceStatus;
use App\Enum\TrottinetteStatus;
use App\Form\MaintenanceType;
use App\Repository\MaintenanceRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/admin/maintenance')]
class MaintenanceController extends AbstractController
{
    #[Route('/', name: 'app_maintenance_index', methods: ['GET'])]
    public function index(MaintenanceRepository $maintenanceRepository): Response
    {
        return $this->render('maintenance/index.html.twig', [
            'maintenances' => $maintenanceRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_maintenance_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $maintenance = new Maintenance();
        $form = $this->createForm(MaintenanceType::class, $maintenance);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Set the trottinette ID from the selected trottinette
            if ($maintenance->getTrottinette()) {
                $maintenance->setTrottinetteId($maintenance->getTrottinette()->getId());
                
                // Update trottinette status to EN_MAINTENANCE
                $trottinette = $maintenance->getTrottinette();
                $trottinette->setEtat(TrottinetteStatus::EN_MAINTENANCE);
            }
            
            $entityManager->persist($maintenance);
            $entityManager->flush();

            // Add a flash message to confirm successful creation
            $this->addFlash('success', 'La maintenance a été créée avec succès.');

            return $this->redirectToRoute('app_maintenance_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('maintenance/new.html.twig', [
            'maintenance' => $maintenance,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_maintenance_show', methods: ['GET'])]
    public function show(Maintenance $maintenance): Response
    {
        return $this->render('maintenance/show.html.twig', [
            'maintenance' => $maintenance,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_maintenance_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Maintenance $maintenance, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(MaintenanceType::class, $maintenance);
        
        // Remove any code that might be setting form['cout']
        // Remove any code that might be setting form['technicien']
        
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Remove any code that might be setting maintenance.cout
            // Remove any code that might be setting maintenance.technicien
            
            if ($maintenance->getStatut() === MaintenanceStatus::TERMINE) {
                $trottinette = $maintenance->getTrottinette();
                if ($trottinette) {
                    $trottinette->setEtat(TrottinetteStatus::DISPONIBLE);
                }
            }
            
            $entityManager->flush();

            // Add a flash message to confirm successful update
            $this->addFlash('success', 'La maintenance a été mise à jour avec succès.');

            return $this->redirectToRoute('app_maintenance_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('maintenance/edit.html.twig', [
            'maintenance' => $maintenance,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_maintenance_delete', methods: ['POST'])]
    public function delete(Request $request, Maintenance $maintenance, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$maintenance->getId(), $request->request->get('_token'))) {
            $trottinette = $maintenance->getTrottinette();
            if ($trottinette && $trottinette->getEtat() === TrottinetteStatus::EN_MAINTENANCE) {
                $trottinette->setEtat(TrottinetteStatus::DISPONIBLE);
            }
            
            $entityManager->remove($maintenance);
            $entityManager->flush();
            $this->addFlash('success', 'La maintenance a été supprimée avec succès.');
        }

        return $this->redirectToRoute('app_maintenance_index');
    }
}