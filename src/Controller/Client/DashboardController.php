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

use App\Entity\Utilisateur; // Import User entity
use App\Enum\ReservationStatus; // Import ReservationStatus Enum
use App\Enum\ParticipationStatus; // Import ParticipationStatus Enum
use Psr\Log\LoggerInterface;


#[Route('/client')]
#[IsGranted('ROLE_USER')]
class DashboardController extends AbstractController
{
    private LoggerInterface $logger;
    public function __construct(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }

    #[Route('/dashboard', name: 'client_dashboard')]
    public function dashboard(
        EventRepository $eventRepository,
        ParticipationRepository $participationRepository,
        ReservationRepository $reservationRepository,
        // TrottinetteRepository $trottinetteRepository, // Keep if needed for stats
        // PointRelaisRepository $pointRelaisRepository // Keep if needed for stats
    ): Response {
        /** @var Utilisateur $user */
        $user = $this->getUser(); // Get the currently logged-in user

        if (!$user) {
            // Should not happen due to IsGranted, but good practice
            $this->logger->warning('Client dashboard accessed without authenticated user.');
            return $this->redirectToRoute('app_login');
        }

        $this->logger->info(sprintf('Client dashboard accessed by user ID %d.', $user->getId()));

        // --- Fetch User-Specific Data ---
        $upcomingEvents = [];
        $userActiveReservations = [];
        $participatingEventIds = [];

        try {
            // 1. Fetch upcoming events (can show all or only those participated in)
            // Option A: Show all upcoming events
            $upcomingEvents = $eventRepository->findUpcomingEvents(5); // Limit for dashboard view

            // Option B: Show only events user is participating in (uncomment if preferred)
            // $participations = $participationRepository->findBy(['utilisateur' => $user, 'statut' => ParticipationStatus::INSCRIT]);
            // foreach ($participations as $p) {
            //    $event = $p->getEvent();
            //    // Check if the event is actually upcoming
            //    if ($event && $event->getDateDebut() >= new \DateTimeImmutable()) {
            //        $upcomingEvents[] = $event;
            //    }
            // }
            // // Sort them if needed
            // usort($upcomingEvents, fn($a, $b) => $a->getDateDebut() <=> $b->getDateDebut());
            // $upcomingEvents = array_slice($upcomingEvents, 0, 5); // Limit


            // 2. Fetch user's active/current reservations
            // Adjust status based on your application's logic for "rented"
            $userActiveReservations = $reservationRepository->findBy(
                ['utilisateur' => $user, 'status' => ReservationStatus::CONFIRMED], // Assuming CONFIRMED means active
                ['dateFin' => 'ASC'], // Show ending soonest first
                5 // Limit for dashboard view
            );

            // 3. Get IDs of events user is actively participating in (for button state)
            $activeParticipations = $participationRepository->findBy(['utilisateur' => $user, 'statut' => ParticipationStatus::INSCRIT]);
            foreach ($activeParticipations as $participation) {
                $participatingEventIds[] = $participation->getEvent()->getId();
            }

            $this->logger->info(sprintf('User %d has %d active reservations and participates in %d upcoming events shown.', $user->getId(), count($userActiveReservations), count($upcomingEvents)));

        } catch (\Exception $e) {
            $this->logger->error('Error fetching client dashboard data for user ID ' . $user->getId() . ': ' . $e->getMessage(), ['exception' => $e]);
            $this->addFlash('error', 'Erreur lors du chargement de vos informations.');
        }


        // --- Prepare Data for View ---
        // Prepare events data (calculate duration, add participation status if needed)
        $eventsForView = [];
        foreach($upcomingEvents as $event) {
            $duration = null;
            if ($event->getDateDebut() && $event->getDateFin()) {
                $diff = $event->getDateFin()->diff($event->getDateDebut());
                $duration = sprintf('%dh %02dmin', $diff->h + ($diff->days * 24), $diff->i);
            }
            $eventsForView[] = [
                'entity' => $event,
                'duration' => $duration,
                // Status is checked directly using participatingEventIds in Twig now
            ];
        }

        // No extra prep needed for reservations, pass them directly

        return $this->render('client/dashboard/index.html.twig', [
            'utilisateur' => $user,
            'upcoming_events' => $eventsForView, // Use the prepared array
            'user_reservations' => $userActiveReservations, // User's active reservations
            'participatingEventIds' => $participatingEventIds, // IDs for button state
            // Remove data not directly used in this specific template
            // 'trottinettes' => $trottinettes,
            // 'pointRelais' => $pointRelais,
            // 'reservations' => $reservations, // Use user_reservations instead
            // 'registerTrottIds' => $registerTrottIds,
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
