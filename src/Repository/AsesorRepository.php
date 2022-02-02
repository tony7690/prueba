<?php

namespace App\Repository;

use App\Entity\Asesor;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Asesor|null find($id, $lockMode = null, $lockVersion = null)
 * @method Asesor|null findOneBy(array $criteria, array $orderBy = null)
 * @method Asesor[]    findAll()
 * @method Asesor[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AsesorRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Asesor::class);
    }

    // /**
    //  * @return Asesor[] Returns an array of Asesor objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('a.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Asesor
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
