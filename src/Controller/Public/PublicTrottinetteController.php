<?php

namespace App\Controller\Public;

use App\Entity\Trottinette;
use App\Enum\TrottinetteStatus;
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

    public function __construct(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }

    #[Route('', name: 'public_trottinette_index', methods: ['GET'])]
    public function index(
        Request $request,
        TrottinetteRepository $trottinetteRepository,
        PaginatorInterface $paginator // Inject PaginatorInterface
    ): Response {
        $this->logger->info('Public trottinette index page accessed.');

        // --- Get parameters from request ---
        $search = $request->query->get('search', '');
        $statusFilter = $request->query->get('status', 'all'); // 'all', 'DISPONIBLE', 'EN_MAINTENANCE', etc.
        $sort = $request->query->get('sort', 'date_desc'); // Default sort
        $page = $request->query->getInt('page', 1);
        $limit = $request->query->getInt('limit', 12); // Default items per page (adjust as needed)

        // --- Build Query ---
        $queryBuilder = $trottinetteRepository->createQueryBuilder('t')
            ->leftJoin('t.pointRelais', 'pr'); // Join for potential sorting/filtering by point relais later

        // Apply Search Filter
        if (!empty($search)) {
            $searchTerm = '%' . mb_strtolower($search) . '%';
            $queryBuilder->andWhere(
                $queryBuilder->expr()->orX(
                    $queryBuilder->expr()->like('LOWER(t.modele)', ':search'),
                    $queryBuilder->expr()->like('LOWER(t.numeroSerie)', ':search'),
                    $queryBuilder->expr()->like('LOWER(t.localisation)', ':search'),
                    $queryBuilder->expr()->like('LOWER(pr.nom)', ':search') // Search by point relais name
                )
            )->setParameter('search', $searchTerm);
        }

        // Apply Status Filter (only if not 'all')
        if ($statusFilter !== 'all' && !empty($statusFilter)) {
            // Validate if the status exists in the Enum
            $statusEnumValue = TrottinetteStatus::tryFrom($statusFilter);
            if ($statusEnumValue) {
                $queryBuilder->andWhere('t.etat = :status')
                    ->setParameter('status', $statusEnumValue);
            } else {
                $this->logger->warning(sprintf('Invalid status filter value received: %s', $statusFilter));
                // Maybe add a flash message or ignore the filter
            }
        }

        // Apply Sorting
        switch ($sort) {
            case 'model_asc':
                $queryBuilder->orderBy('t.modele', 'ASC');
                break;
            case 'model_desc':
                $queryBuilder->orderBy('t.modele', 'DESC');
                break;
            case 'battery_asc':
                $queryBuilder->orderBy('t.batterie', 'ASC');
                break;
            case 'battery_desc':
                $queryBuilder->orderBy('t.batterie', 'DESC');
                break;
            case 'date_asc':
                $queryBuilder->orderBy('t.dateAjout', 'ASC');
                break;
            case 'date_desc':
            default: // Default sort
                $queryBuilder->orderBy('t.dateAjout', 'DESC');
                $sort = 'date_desc'; // Ensure sort variable reflects default
                break;
        }

        // --- Paginate ---
        $pagination = $paginator->paginate(
            $queryBuilder->getQuery(), // Doctrine Query object
            $page, // Current page number
            $limit // Limit per page
        );

        $this->logger->info(sprintf('Displaying page %d of trottinettes with limit %d (search: "%s", status: "%s", sort: "%s")', $page, $limit, $search, $statusFilter, $sort));

        // --- Prepare data for the scooter cards (if needed, same as HomeController) ---
        $scootersForView = [];
        foreach ($pagination->getItems() as $scooter) {
            $scootersForView[] = [
                'entity' => $scooter,
                'distanceString' => "Adresse: " . ($scooter->getLocalisation() ?: 'Inconnue'), // Placeholder
                'pricePerMinute' => "0.15 TND/min", // Placeholder - ADJUST CURRENCY/VALUE
                'image_url' => null // Add logic if needed
            ];
        }

        return $this->render('public/trottinette/index.html.twig', [
            'pagination' => $pagination, // Pass the Paginator object
            'scooters_data' => $scootersForView, // Pass prepared data for cards
            'current_search' => $search,
            'current_status' => $statusFilter,
            'current_sort' => $sort,
            'current_limit' => $limit,
            'limit_options' => [3, 6, 12, 20], // Options for items per page dropdown
        ]);
    }

    // You might add a show route here later: #[Route('/{id}', name: 'public_trottinette_show')]
}