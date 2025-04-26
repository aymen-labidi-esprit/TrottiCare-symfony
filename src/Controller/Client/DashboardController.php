<?php
// src/Controller/Client/DashboardController.php
namespace App\Controller\Client;

use App\Repository\TrottinetteRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;
use App\Repository\EventRepository;
use App\Repository\ParticipationRepository;
use App\Repository\PointRelaisRepository;
use App\Repository\ReservationRepository;



#[Route('/client')]
#[IsGranted('ROLE_USER')]
class DashboardController extends AbstractController
{
    #[Route('/dashboard', name: 'client_dashboard')]
    public function dashboard(
        EventRepository $eventRepository,
        ParticipationRepository $participationRepository,
        TrottinetteRepository $trottinetteRepository,
        PointRelaisRepository $pointRelaisRepository,
        ReservationRepository $reservationrepo,
    ): Response {
        $user = $this->getUser();
        $events = $eventRepository->findUpcomingEvents();
        $participations = $participationRepository->findByUser($user);
        $trottinettes = $trottinetteRepository->findAvailable();
        $pointRelais = $pointRelaisRepository->findAll();
        $reservations = $reservationrepo->findAll();

        $participatingEventIds = [];
        foreach ($participations as $participation) {
            $participatingEventIds[] = $participation->getEvent()->getId();
        }

        $registerTrottIds =[];
        foreach ($reservations as $reservation) {
            $registerTrottIds[] = $reservation->getTrottinette()->getId();
        }
        return $this->render('client/dashboard/index.html.twig', [
            'events' => $events,
            'participatingEventIds' => $participatingEventIds,
            'utilisateur' => $user,
            'trottinettes' => $trottinettes,
            'pointRelais' => $pointRelais,
            'reservations' => $reservations,
            'registerTrottIds' => $registerTrottIds,
        ]);
    }

    #[Route('/dashboard/qr-scan', name: 'client_qr_scan', methods: ['GET'])]
    public function qrScan(): Response
    {
        return $this->render('client/dashboard/qr_scan.html.twig');
    }

    #[Route('/dashboard/map', name: 'client_map_display', methods: ['GET'])]
    public function mapDisplay(TrottinetteRepository $trottiRepo): Response
    {
        $trottinettes = $trottiRepo->findAvailable();
        return $this->render('client/dashboard/map.html.twig', [
            'trottinettes' => $trottinettes,
        ]);
    }
}
