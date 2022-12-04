<?php

namespace App\Repository;

use App\Entity\Nota;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Nota|null find($id, $lockMode = null, $lockVersion = null)
 * @method Nota|null findOneBy(array $criteria, array $orderBy = null)
 * @method Nota[]    findAll()
 * @method Nota[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class NotaRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Nota::class);
    }

    public function getListSubjects($id)
    {
        $qb = $this->createQueryBuilder('n')
            ->select('n.fecha, 
        n.nota, 
        al.nombre, 
        al.apellidos, 
        al.nExpediente, 
        ag.id as subjectId, 
        ag.nombre as subjectName')
            ->innerJoin('n.alumno', 'al', 'al.id = n.alumno')
            ->innerJoin('n.asignatura', 'ag', 'ag.id = n.asignatura')
            ->where('al.id =:id')
            ->setParameter('id', $id)
            ->orderBy('n.fecha', 'ASC')
            ->getQuery()
            ->execute();
        $result = [];
        foreach ($qb as $key => $value) {
            $subjectId = $value['subjectId'];
            $subjectName = $value['subjectName'];
            $note = $value['nota'];
            $result[$subjectId] = [
                'subjectName' => $subjectName,
                'note' => $note
            ];
        }
        return $result;
    }
}
