<?php

namespace App\Controller\Public;

use App\Repository\EventRepository;
use App\Repository\TrottinetteRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Psr\Log\LoggerInterface;

class HomeController extends AbstractController
{
    private LoggerInterface $logger;

    public function __construct(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }

    #[Route('/', name: 'app_home', methods: ['GET'])]
    public function index(TrottinetteRepository $trottinetteRepository, EventRepository $eventRepository): Response
    {
        $this->logger->info('Public\HomeController::index processing started (No Map).');

        $availableScooters = [];
        $upcomingEvents = [];
        $scootersForView = [];
        $eventsForView = [];

        try {
            // Fetch available scooters
            $availableScooters = $trottinetteRepository->findBy(['etat' => 'DISPONIBLE'], ['dateAjout' => 'DESC'], 8); // Limit to 8 scooters
            $this->logger->info(sprintf('Fetched %d available scooters.', count($availableScooters)));

            // Fetch upcoming events
            if (method_exists($eventRepository, 'findUpcomingEvents')) {
                $upcomingEvents = $eventRepository->findUpcomingEvents(3); // Limit to 3 events
            } else {
                $this->logger->warning('Method findUpcomingEvents not found in EventRepository.');
                $upcomingEvents = $eventRepository->findBy([], ['dateDebut' => 'ASC'], 3);
            }
            $this->logger->info(sprintf('Fetched %d upcoming events.', count($upcomingEvents)));

            // --- Prepare Scooter Card Data ---
            foreach ($availableScooters as $scooter) {
                $scootersForView[] = [
                    'entity' => $scooter,
                    'distanceString' => "Adresse: " . ($scooter->getLocalisation() ?: 'Inconnue'), // Placeholder
                    'pricePerMinute' => "0.15 €/min", // Placeholder
                    'image_url' => null // Add logic if needed
                ];
            }

            // --- Prepare Event Card Data ---
            foreach ($upcomingEvents as $event) {
                $eventsForView[] = [
                    'entity' => $event,
                    // Use state (Gouvernorat) for location if available
                    'location' => $event->getState()?->label() ?? 'Lieu à définir'
                ];
            }

        } catch (\Exception $e) {
            $this->logger->error('Error preparing homepage data: ' . $e->getMessage(), ['exception' => $e]);
            $this->addFlash('error', 'Une erreur est survenue lors du chargement de la page.');
            $scootersForView = [];
            $eventsForView = [];
        }

        // --- Prepare Context for Rendering (NO MAP DATA) ---
        $context = [
            'controller_name' => 'HomeController',
            'scooters' => $scootersForView,
            'upcoming_events' => $eventsForView,
            // 'markersJson' => REMOVED,
            // 'mapCenterLat' => REMOVED,
            // 'mapCenterLng' => REMOVED,
            // 'mapZoom' => REMOVED,
            'heroTitle' => 'Découvrez la ville autrement',
            'heroSubtitle' => 'Louez nos trottinettes électriques facilement. Disponibles 24/7, écologiques et fun !',
        ];

        $this->logger->debug('Rendering public/home/index.html.twig (No Map) with keys: ' . implode(', ', array_keys($context)));

        // --- Render View ---
        return $this->render('public/home/index.html.twig', $context);
    }
}