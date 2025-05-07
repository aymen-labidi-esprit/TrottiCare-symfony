<?php
// src/Repository/TrottinetteRepository.php
namespace App\Repository;

use App\Entity\Trottinette;
use App\Enum\TrottinetteStatus;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;
use Knp\Component\Pager\PaginatorInterface; // <-- Import Paginator
 use Knp\Bundle\PaginatorBundle\Pagination\SlidingPagination; // <-- Import the concrete class

/**
 * @extends ServiceEntityRepository<Trottinette>
 */
class TrottinetteRepository extends ServiceEntityRepository
{
    private PaginatorInterface $paginator; // <-- Add property


    public function __construct(ManagerRegistry $registry, PaginatorInterface $paginator)
    {
        parent::__construct($registry, Trottinette::class);
        $this->paginator = $paginator;
    }


    /**
     * Find trottinettes based on DB criteria (search, status, battery) with pagination.
     * Autonomy filtering will happen in PHP after this.
     *
     * @param array $criteria ['search', 'status', 'batterie_min']  <- Note: 'autonomie_min' is ignored here
     * @param int $page
     * @param int $limit
     * @param string $sortField
     * @param string $sortDirection
     * @return SlidingPagination
     */
    public function findFilteredPaginated(
        array $criteria,
        int $page,
        int $limit,
        string $sortField = 't.dateAjout',
        string $sortDirection = 'DESC'
    ): SlidingPagination // Adjust return type if needed
    {
        $qb = $this->createQueryBuilder('t')
            ->leftJoin('t.pointRelais', 'pr')
            ->leftJoin('t.utilisateur', 'u')
            ->addSelect('pr', 'u');

        // Apply Search filter
        if (!empty($criteria['search'])) {
            $searchTerm = '%' . mb_strtolower(trim($criteria['search'])) . '%';
            $qb->andWhere($qb->expr()->orX(
                $qb->expr()->like('LOWER(t.modele)', ':search'),
                $qb->expr()->like('LOWER(t.numeroSerie)', ':search'),
                $qb->expr()->like('LOWER(t.localisation)', ':search'),
                $qb->expr()->like('LOWER(pr.nom)', ':search')
            ))
                ->setParameter('search', $searchTerm);
        }

        // Apply Status filter
        if (!empty($criteria['status'])) {
            $statusEnum = TrottinetteStatus::tryFrom($criteria['status']);
            if ($statusEnum) {
                $qb->andWhere('t.etat = :etat')
                    ->setParameter('etat', $statusEnum);
            }
        } else {
            // Default for public view: Only show DISPONIBLE if no status is selected
//            $qb->andWhere('t.etat = :defaultEtat')
//                ->setParameter('defaultEtat', TrottinetteStatus::DISPONIBLE);
        }

        // Apply Battery Minimum Filter
        if (!empty($criteria['batterie_min']) && is_numeric($criteria['batterie_min'])) {
            $qb->andWhere('t.batterie >= :batterie_min')
                ->setParameter('batterie_min', (int)$criteria['batterie_min']);
        }

        // --- AUTONOMY FILTER REMOVED FROM DQL ---

        // Apply Sorting (Let KNP handle it based on request params)
        // $qb->orderBy($sortField, $sortDirection); // KNP will override this

        $query = $qb->getQuery();

        // Paginate based on DB results (BEFORE PHP filtering)
        return $this->paginator->paginate(
            $query,
            $page,
            $limit,
            [ // KNP Options
                'pageParameterName'          => 'page',
                'sortFieldParameterName'     => 'sort',
                'sortDirectionParameterName' => 'direction',
                'defaultSortFieldName'       => $sortField,
                'defaultSortDirection'       => $sortDirection,
                'distinct'                   => false,
                'allowEmptyFields'           => true,
            ]
        );
    }

    // Keep save/remove if needed
    public function save(Trottinette $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);
        if ($flush) { $this->getEntityManager()->flush(); }
    }
    public function remove(Trottinette $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);
        if ($flush) { $this->getEntityManager()->flush(); }
    }

    // Keep findAvailable if used elsewhere
    public function findAvailable(): array
    {
        return $this->createQueryBuilder('t')
            ->where('t.etat = :etat')
            ->setParameter('etat', TrottinetteStatus::DISPONIBLE) // Use Enum case
            ->getQuery()
            ->getResult();
    }

    /**
     * Counts trottinettes by status.
     */
    public function countByEtat(TrottinetteStatus $status): int
    {
        try {
            return (int) $this->createQueryBuilder('t')
                ->select('count(t.id)')
                ->andWhere('t.etat = :status')
                ->setParameter('status', $status)
                ->getQuery()
                ->getSingleScalarResult();
        } catch (\Doctrine\ORM\NoResultException | \Doctrine\ORM\NonUniqueResultException $e) {
            return 0;
        }
    }
}