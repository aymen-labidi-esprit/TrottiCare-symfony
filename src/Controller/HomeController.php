<?php
// src/Controller/HomeController.php

namespace App\Controller;

use App\Repository\EventRepository;
use App\Repository\TrottinetteRepository;
use Psr\Log\LoggerInterface; // Import Logger
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route; // Use Attribute instead if using PHP 8+

// Using #[Route] attribute for the route definition
class HomeController extends AbstractController
{
    private LoggerInterface $logger;

    // Inject repositories and logger via constructor
    public function __construct(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }

    #[Route('/', name: 'app_home', methods: ['GET'])] // Define the route here
    public function index(
        TrottinetteRepository $trottinetteRepository,
        EventRepository $eventRepository
    ): Response {
        $this->logger->info('HomeController::index processing started.');

        $scootersForView = [];
        $eventsForView = [];

        try {

            // Fetch available scooters (e.g., limit to 4 for homepage)
            $availableScooters = $trottinetteRepository->findBy([], ['dateAjout' => 'DESC'], 4);

            $this->logger->info(sprintf('Fetched %d available scooters.', count($availableScooters)));

            // Fetch upcoming events (e.g., limit to 3 for homepage)
            if (method_exists($eventRepository, 'findUpcomingEvents')) {
                $upcomingEvents = $eventRepository->findUpcomingEvents();

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
                    'pricePerMinute' => "0.15 TND/min", // Placeholder
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
            $this->addFlash('error', 'Une erreur est survenue lors du chargement des données.');
            // Keep arrays empty on error
            $scootersForView = [];
            $eventsForView = [];
        }

        // --- Prepare Context for Rendering ---
        $context = [
            'scooters' => $scootersForView,         // Pass the prepared array for scooters
            'upcoming_events' => $eventsForView,    // Pass the prepared array for events
            'heroTitle' => 'Découvrez la ville autrement',
            'heroSubtitle' => 'Louez nos trottinettes électriques facilement. Disponibles 24/7, écologiques et fun !',
        ];

        $this->logger->debug('Rendering home/index.html.twig with keys: ' . implode(', ', array_keys($context)));

        // Render the specific template 'home/index.html.twig'
        return $this->render('home/index.html.twig', $context);
    }
}