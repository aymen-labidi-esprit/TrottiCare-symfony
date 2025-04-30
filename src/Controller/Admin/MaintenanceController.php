<?php

namespace App\Controller\Admin;

use App\Entity\Maintenance;
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
    #[Route('/', name: 'admin_maintenance_index', methods: ['GET'])]
    public function index(MaintenanceRepository $maintenanceRepository): Response
    {
        return $this->render('maintenance/index.html.twig', [
            'maintenances' => $maintenanceRepository->findAll(),
        ]);
    }

    // --- NEW ACTION FOR CALENDAR VIEW ---
    #[Route('/calendar', name: 'admin_maintenance_calendar', methods: ['GET'])]
    public function calendarView(MaintenanceRepository $maintenanceRepository): Response
    {
        // Fetch ALL maintenance records (Consider limiting by date range for performance if needed)
        $maintenances = $maintenanceRepository->findAll();

        $calendarEvents = [];
        foreach ($maintenances as $maintenance) {
            $trottinetteInfo = $maintenance->getTrottinette()
                ? 'Trott. #' . $maintenance->getTrottinetteId() . ' (' . $maintenance->getTrottinette()->getModele() . ')'
                : 'Trott. #' . $maintenance->getTrottinetteId();

            // Determine color based on status
            $color = match($maintenance->getStatut()) {
                'EN_COURS' => '#facc15', // yellow-400 approx
                'TERMINEE' => '#4ade80', // green-400 approx
                'ANNULEE' => '#f87171', // red-400 approx
                default => '#9ca3af', // gray-400 approx
            };

            // Format data for FullCalendar
            $calendarEvents[] = [
                'id' => $maintenance->getId(),
                'title' => $trottinetteInfo, // Title shown on the calendar event
                'start' => $maintenance->getDateDebut()->format('Y-m-d H:i:s'), // ISO8601 format
                // FullCalendar handles events without end dates correctly
                'end' => $maintenance->getDateFin()?->format('Y-m-d H:i:s'), // Nullable end date
                'color' => $color, // Background color for the event
                'extendedProps' => [ // Store extra data accessible on click
                    'description' => $maintenance->getDescription() ?: 'N/A',
                    'statut' => $maintenance->getStatut(),
                    'trottinetteId' => $maintenance->getTrottinetteId(),
                    'trottinetteModele' => $maintenance->getTrottinette()?->getModele(),
                    'trottinetteNumeroSerie' => $maintenance->getTrottinette()?->getNumeroSerie(),
                    'dateFinFormatted' => $maintenance->getDateFin() ? $maintenance->getDateFin()->format('d/m/Y H:i') : 'En cours',
                    'detailsUrl' => $this->generateUrl('admin_maintenance_show', ['id' => $maintenance->getId()]) // Link to detail page
                ]
            ];
        }

        // Pass the JSON encoded data to the Twig template
        return $this->render('maintenance/calendar.html.twig', [
            'maintenanceEventsJson' => json_encode($calendarEvents)
        ]);
    }
    // --- END NEW ACTION ---

    #[Route('/new', name: 'admin_maintenance_new', methods: ['GET', 'POST'])]
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

            return $this->redirectToRoute('admin_maintenance_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('maintenance/new.html.twig', [
            'maintenance' => $maintenance,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'admin_maintenance_show', methods: ['GET'])]
    public function show(Maintenance $maintenance): Response
    {
        return $this->render('maintenance/show.html.twig', [
            'maintenance' => $maintenance,
        ]);
    }

    #[Route('/{id}/edit', name: 'admin_maintenance_edit', methods: ['GET', 'POST'])]
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

            return $this->redirectToRoute('admin_maintenance_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('maintenance/edit.html.twig', [
            'maintenance' => $maintenance,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'admin_maintenance_delete', methods: ['POST'])]
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

        return $this->redirectToRoute('admin_maintenance_index');
    }
}