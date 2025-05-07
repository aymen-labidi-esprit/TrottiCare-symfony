<?php

namespace App\Repository;

use App\Entity\Event;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;
use Doctrine\ORM\QueryBuilder;
use App\Controller\Client\EventController; // Import controller to access constants
use Knp\Component\Pager\PaginatorInterface;
use Knp\Bundle\PaginatorBundle\Pagination\SlidingPagination;

/**
 * @extends ServiceEntityRepository<Event>
 *
 * @method Event|null find($id, $lockMode = null, $lockVersion = null)
 * @method Event|null findOneBy(array $criteria, array $orderBy = null)
 * @method Event[]    findAll()
 * @method Event[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class EventRepository extends ServiceEntityRepository
{
    private PaginatorInterface $paginator;

    public function __construct(ManagerRegistry $registry, PaginatorInterface $paginator)
    {
        parent::__construct($registry, Event::class);
        $this->paginator = $paginator;
    }

    /**
     * Finds events based on criteria and returns a paginated result.
     * Sorting is handled by KNP Paginator.
     *
     * @param array $criteria ['search', 'status', 'date_filter']
     * @param int   $page
     * @param int   $limit
     * @param string $defaultSortField Default DQL field if KNP doesn't sort
     * @param string $defaultSortDirection Default direction if KNP doesn't sort
     * @return SlidingPagination
     */
    public function findFilteredPaginated(
        array $criteria,
        int $page,
        int $limit,
        string $defaultSortField = 'e.dateDebut',
        string $defaultSortDirection = 'desc'
    ): SlidingPagination // Adjust return type if needed
    {
        $qb = $this->createQueryBuilder('e')
            ->leftJoin('e.participations', 'p')
            ->addSelect('p');

        // Apply Search filter
        if (!empty($criteria['search'])) {
            $searchTerm = '%' . mb_strtolower(trim($criteria['search'])) . '%';
            $qb->andWhere($qb->expr()->orX(
                'LOWER(e.titre)       LIKE :q',
                'LOWER(e.description) LIKE :q',
                'LOWER(e.state)       LIKE :q' // Assuming state is string-like or castable
            ))
                ->setParameter('q', $searchTerm);
        }

        // Apply Status Filter
        if (!empty($criteria['status'])) {
            $qb->andWhere('e.statut = :status')->setParameter('status', $criteria['status']);
        }

        // Apply Date Filter
        $now = new \DateTimeImmutable();
        if (!empty($criteria['date_filter'])) {
            if ($criteria['date_filter'] === 'upcoming') {
                $qb->andWhere('e.dateDebut >= :now')->setParameter('now', $now);
            } elseif ($criteria['date_filter'] === 'past') {
                $qb->andWhere('e.dateDebut < :now')->setParameter('now', $now);
            }
        }

        // REMOVE Explicit orderBy - KNP handles it

        $query = $qb->getQuery();

        // Pass default sort options and WHITELIST to KNP Paginator
        return $this->paginator->paginate(
            $query,
            $page,
            $limit,
            [
                'pageParameterName' => 'page',
                'sortFieldParameterName' => 'sort', // KNP looks for DQL path here
                'sortDirectionParameterName' => 'direction',
                'defaultSortFieldName' => $defaultSortField,
                'defaultSortDirection' => $defaultSortDirection,
                'distinct' => true,
                // +++ IMPORTANT: Whitelist allowed DQL sort fields +++
                // Use the constant directly from the controller where it's defined
                'sortFieldWhitelist' => array_values(EventController::ALLOWED_SORT_FIELDS)
            ]
        );
    }

    /**
     * Find upcoming events
     */
    public function findUpcomingEvents(): array
    {
        return $this->createQueryBuilder('e')
            ->andWhere('e.dateDebut > :now')
            ->setParameter('now', new \DateTime())
            ->orderBy('e.dateDebut', 'ASC')
            ->getQuery()
            ->getResult();
    }

    /**
     * Find events by location
     */
    public function findByLocation(string $location): array
    {
        return $this->createQueryBuilder('e')
            ->andWhere('e.lieu LIKE :location')
            ->setParameter('location', '%' . $location . '%')
            ->orderBy('e.dateDebut', 'ASC')
            ->getQuery()
            ->getResult();
    }

    /**
     * Find events by date range
     */
    public function findByDateRange(\DateTime $start, \DateTime $end): array
    {
        return $this->createQueryBuilder('e')
            ->andWhere('e.dateDebut >= :start')
            ->andWhere('e.dateFin <= :end')
            ->setParameter('start', $start)
            ->setParameter('end', $end)
            ->orderBy('e.dateDebut', 'ASC')
            ->getQuery()
            ->getResult();
    }

    /**
     * Find events by minimum scooter autonomy
     */
    public function findByMinScooterAutonomy(int $minAutonomy): array
    {
        return $this->createQueryBuilder('e')
            ->andWhere('e.trottinetteMinAutonomie <= :minAutonomy')
            ->setParameter('minAutonomy', $minAutonomy)
            ->orderBy('e.dateDebut', 'ASC')
            ->getQuery()
            ->getResult();
    }

    /**
     * Counts events by status.
     */
    // --- CORRECTED METHOD NAME ---
    public function countByStatus(string $statut): int // Changed parameter name to match entity property
    {
        try {
            return (int) $this->createQueryBuilder('e')
                ->select('count(e.id)')
                ->andWhere('e.statut = :statut') // Use the correct property name 'statut'
                ->setParameter('statut', $statut) // Bind the parameter
                ->getQuery()
                ->getSingleScalarResult();
        } catch (\Doctrine\ORM\NoResultException | \Doctrine\ORM\NonUniqueResultException $e) {
            return 0;
        }
    }
}