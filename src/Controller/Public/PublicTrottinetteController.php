<?php

namespace App\Controller\Public;

use App\Entity\Trottinette;
use App\Enum\TrottinetteStatus;
use App\Form\PublicTrottinetteFilterType;
use App\Repository\TrottinetteRepository;
use Knp\Component\Pager\PaginatorInterface; // Use KnpPaginator if installed
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route; // Or use Attribute
use Psr\Log\LoggerInterface;

#[Route('/trottinettes')] // Base route for this controller
class PublicTrottinetteController extends AbstractController
{
    private LoggerInterface $logger;
    // Define allowed limits for items per page (can be different from admin)
    private const ALLOWED_LIMITS = [8, 12, 24, 48];
    private const DEFAULT_LIMIT = 12;

    public function __construct(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }



    #[Route('', name: 'public_trottinette_index', methods: ['GET'])]
    public function index(
        Request $request,
        TrottinetteRepository $trottinetteRepository,
        PaginatorInterface $paginator
    ): Response {
        $this->logger->info('Public trottinette index page accessed.');

        $filterForm = $this->createForm(PublicTrottinetteFilterType::class);
        $filterForm->handleRequest($request);

        $criteria = $filterForm->isSubmitted() && $filterForm->isValid()
            ? $filterForm->getData()
            : [ // Use query params as fallback ONLY if form data isn't there
                'search' => $request->query->get('search', ''),
                'status' => $request->query->get('status'), // Changed from 'etat' to match form
                'batterie_min' => $request->query->get('batterie_min'),
                'autonomie_km' => $request->query->get('autonomie_km'), // Use new form field name
            ];

        // --- Pagination Limit Handling ---
        $limit = $request->query->getInt('limit', self::DEFAULT_LIMIT);
        if (!in_array($limit, self::ALLOWED_LIMITS)) {
            $limit = self::DEFAULT_LIMIT;
        }

        // --- Sorting ---
        // (Sorting logic remains the same)
        $allowedSorts = [     'date_desc' => ['field' => 't.dateAjout', 'direction' => 'desc'],
            'date_asc'  => ['field' => 't.dateAjout', 'direction' => 'asc'],
            'name_asc'  => ['field' => 't.modele',    'direction' => 'asc'],
        ];
        $sortKey = $request->query->get('sort', 'date_desc');
        $sortField = $allowedSorts[$sortKey]['field'] ?? $allowedSorts['date_desc']['field'];
        $sortDirection = $allowedSorts[$sortKey]['direction'] ?? $allowedSorts['date_desc']['direction'];
        // Override with KNP params if present...

        // --- Fetch Paginated Data (Based on DB criteria only) ---
        $pagination = $trottinetteRepository->findFilteredPaginated(
            $criteria, // Pass all criteria, but repo ignores autonomie_km
            $request->query->getInt('page', 1),
            $limit,
            $sortField,
            $sortDirection
        );

        // --- ++ PHP Filtering for Autonomy ++ ---
        $filteredItems = []; // Array to hold items passing PHP filter
        $minAutonomieFilter = isset($criteria['autonomie_km']) && is_numeric($criteria['autonomie_km'])
            ? (int)$criteria['autonomie_km']
            : null;

        if ($minAutonomieFilter !== null) {
            $this->logger->info('Applying PHP filter for minimum autonomy: ' . $minAutonomieFilter);
            foreach ($pagination->getItems() as $trottinette) {
                /** @var Trottinette $trottinette */ // Hint for IDE
                $autonomieString = $trottinette->getAutonomie(); // Get the string value
                $numericAutonomy = null;

                // Extract numeric part (simple extraction)
                if ($autonomieString && preg_match('/^(\d+)/', $autonomieString, $matches)) {
                    $numericAutonomy = (int)$matches[1];
                }

                // Apply the filter
                if ($numericAutonomy !== null && $numericAutonomy >= $minAutonomieFilter) {
                    $filteredItems[] = $trottinette; // Keep if matches
                }
            }
        } else {
            // No autonomy filter applied, use all items from the current page
            $filteredItems = $pagination->getItems();
        }
        // --- ++ END PHP Filtering ++ ---


        // --- Prepare data for scooter cards (Using the FILTERED items) ---
        $scootersForView = [];
        foreach ($filteredItems as $scooter) { // Loop through the filtered array
            $scootersForView[] = [
                'entity' => $scooter,
                'distanceString' => "📍 " . ($scooter->getLocalisation() ?: 'Inconnue'),
                'pricePerMinute' => "0.15 €/min", // Adjust currency/value
                'image_url' => null
            ];
        }
        $allowedSortsMap = [
            'Date : plus récents'  => 'date_desc',
            'Date : plus anciens'  => 'date_asc',
            'Modèle A → Z'         => 'name_asc',
        ];
        return $this->render('public/trottinette/index.html.twig', [
            'pagination' => $pagination, // Still pass the original pagination object for controls
            'scooters_data' => $scootersForView, // Pass the PHP-FILTERED items for display
            'filterForm' => $filterForm->createView(),
            'currentLimit' => $limit,
            'allowedLimits' => self::ALLOWED_LIMITS,
            'current_sort' => $sortKey,
            'allowed_sorts_map'   => $allowedSortsMap,  // <--- NEW

            'current_sort_field'  => $sortKey,          // <--- NEW  (what Twig expects)

            // Note: Add a message in Twig explaining pagination might be inaccurate due to filtering
        ]);
    }
    // You might add a show route here later: #[Route('/{id}', name: 'public_trottinette_show')]
}