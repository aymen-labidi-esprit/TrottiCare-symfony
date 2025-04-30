<?php
// src/Controller/Admin/DashboardController.php
namespace App\Controller\Admin;

use App\Repository\EventRepository;
use App\Repository\UtilisateurRepository;
use App\Repository\TrottinetteRepository;
use App\Repository\ReservationRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;

#[Route('/admin')]
#[IsGranted('ROLE_ADMIN')]
class DashboardController extends AbstractController
{
    #[Route('/', name: 'admin_dashboard')]
    public function dashboard(
        UtilisateurRepository $userRepo,
        TrottinetteRepository $trottinetteRepo,
        ReservationRepository $reservationRepo,
        EventRepository $eventRepository
    ) {
        $events = $eventRepository->findAll();

        $eventData = [];
        foreach ($events as $event) {
            $eventData[] = [
                'event' => $event,
                'participantCount' => $event->getParticipations()->count(),
                
            ];
        }

        
        return $this->render('admin/dashboard.html.twig', [
            'eventData' => $eventData,
            'user_count' => $userRepo->count([]),
            'trottinette_count' => $trottinetteRepo->count([]),
            'reservation_count' => $reservationRepo->count([]),
        ]);
    }
}