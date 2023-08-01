<?php

namespace App\Repository;

use App\Entity\Grado;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Grado|null find($id, $lockMode = null, $lockVersion = null)
 * @method Grado|null findOneBy(array $criteria, array $orderBy = null)
 * @method Grado[]    findAll()
 * @method Grado[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class GradoRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Grado::class);
    }

    // /**
    //  * @return Grado[] Returns an array of Grado objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('g')
            ->andWhere('g.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('g.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Grado
    {
        return $this->createQueryBuilder('g')
            ->andWhere('g.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
