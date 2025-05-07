<?php
// src/Repository/UtilisateurRepository.php
namespace App\Repository;

use App\Entity\Utilisateur;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Component\Security\Core\Exception\UnsupportedUserException;
use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;
use Symfony\Component\Security\Core\User\PasswordUpgraderInterface;
use Doctrine\ORM\Tools\Pagination\Paginator; // <-- Import Paginator
use Knp\Bundle\PaginatorBundle\Pagination\SlidingPagination; // <--- MAKE SURE THIS LINE EXISTS AND IS CORRECT
/**
 * @extends ServiceEntityRepository<Utilisateur>
 * @implements PasswordUpgraderInterface<Utilisateur>
 */
class UtilisateurRepository extends ServiceEntityRepository implements PasswordUpgraderInterface
{
    private PaginatorInterface $paginator; // <-- MUST HAVE THIS PROPERTY

    // <-- MUST INJECT PaginatorInterface HERE -->
    public function __construct(ManagerRegistry $registry, PaginatorInterface $paginator)
    {
        parent::__construct($registry, Utilisateur::class);
        $this->paginator = $paginator; // <-- MUST STORE IT HERE
    }


    /**
     * Used to upgrade (rehash) the user's password automatically over time.
     */
    public function upgradePassword(PasswordAuthenticatedUserInterface $user, string $newHashedPassword): void
    {
        if (!$user instanceof Utilisateur) {
            throw new UnsupportedUserException(sprintf('Instances of "%s" are not supported.', $user::class));
        }

        $user->setPassword($newHashedPassword);
        $this->getEntityManager()->persist($user);
        $this->getEntityManager()->flush();
    }

    public function save(Utilisateur $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);
        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(Utilisateur $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);
        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }


    /**
     * Find users based on criteria with pagination and sorting.
     *
     * @param array $criteria ['search' => string, 'role' => string]
     * @param int $page
     * @param int $limit
     * @param string $sortField DQL field path (e.g., 'u.nom')
     * @param string $sortDirection 'asc' or 'desc'
     * @param array $sortFieldWhitelist Allowed DQL sort fields
     * @return SlidingPagination // <--- CORRECTED RETURN TYPE HINT (uses the imported class)
     */
    public function findByCriteria(
        array $criteria = [],
        int $page = 1,
        int $limit = 15,
        string $sortField = 'u.nom',
        string $sortDirection = 'asc',
        array $sortFieldWhitelist = ['u.id', 'u.nom', 'u.prenom', 'u.email', 'u.roleInterne', 'u.isActive', 'u.isVerified']
    ): SlidingPagination // <--- CORRECTED RETURN TYPE HINT (uses the imported class)
    {
        $qb = $this->createQueryBuilder('u');

        // --- Apply Filters ---
        if (!empty($criteria['search'])) {
            $searchTerm = '%' . trim($criteria['search']) . '%';
            $qb->andWhere($qb->expr()->orX(
                $qb->expr()->like('LOWER(u.nom)', ':searchLower'),
                $qb->expr()->like('LOWER(u.prenom)', ':searchLower'),
                $qb->expr()->like('LOWER(u.email)', ':searchLower')
            ))
                ->setParameter('searchLower', mb_strtolower($searchTerm));
        }

        if (!empty($criteria['role'])) {
            $qb->andWhere('u.roleInterne = :role')
                ->setParameter('role', $criteria['role']);
        }

        // --- Apply Sorting ---
        if (in_array($sortField, $sortFieldWhitelist)) {
            $qb->orderBy($sortField, $sortDirection);
        } else {
            $qb->orderBy('u.nom', 'asc');
        }
        $qb->addOrderBy('u.id', 'ASC');

        $query = $qb->getQuery();

        // --- Use KNP Paginator Service ---
        // This part is already correct based on the error message!
        return $this->paginator->paginate(
            $query,
            $page,
            $limit,
            [
                'sortFieldWhitelist' => $sortFieldWhitelist,
                'defaultSortFieldName' => $sortField,
                'defaultSortDirection' => $sortDirection,
                'distinct' => false,
            ]
        );
    }
 }