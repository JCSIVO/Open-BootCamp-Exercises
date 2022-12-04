<?php

namespace App\Repository;

use App\Entity\Asignatura;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Asignatura|null find($id, $lockMode = null, $lockVersion = null)
 * @method Asignatura|null findOneBy(array $criteria, array $orderBy = null)
 * @method Asignatura[]    findAll()
 * @method Asignatura[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AsignaturaRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Asignatura::class);
    }

    // /**
    //  * @return Asignatura[] Returns an array of Asignatura objects
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
    public function findOneBySomeField($value): ?Asignatura
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
