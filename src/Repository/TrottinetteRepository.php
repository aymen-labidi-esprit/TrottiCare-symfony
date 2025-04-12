<?php

namespace App\Repository;

use App\Entity\Trottinette;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Trottinette>
 *
 * @method Trottinette|null find($id, $lockMode = null, $lockVersion = null)
 * @method Trottinette|null findOneBy(array $criteria, array $orderBy = null)
 * @method Trottinette[]    findAll()
 * @method Trottinette[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TrottinetteRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Trottinette::class);
    }

    public function save(Trottinette $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(Trottinette $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }
}