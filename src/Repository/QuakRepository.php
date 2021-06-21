<?php

namespace App\Repository;

use App\Entity\Quak;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Quak|null find($id, $lockMode = null, $lockVersion = null)
 * @method Quak|null findOneBy(array $criteria, array $orderBy = null)
 * @method Quak[]    findAll()
 * @method Quak[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class QuakRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Quak::class);
    }

    // /**
    //  * @return Quak[] Returns an array of Quak objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('q')
            ->andWhere('q.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('q.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Quak
    {
        return $this->createQueryBuilder('q')
            ->andWhere('q.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
