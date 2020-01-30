<?php

namespace App\Repository;

use App\Entity\Circassian;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method Circassian|null find($id, $lockMode = null, $lockVersion = null)
 * @method Circassian|null findOneBy(array $criteria, array $orderBy = null)
 * @method Circassian[]    findAll()
 * @method Circassian[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CircassianRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Circassian::class);
    }

    // /**
    //  * @return Circassian[] Returns an array of Circassian objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('c.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Circassian
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
