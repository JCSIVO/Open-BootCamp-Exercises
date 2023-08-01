<?php

namespace App\Repository;

use App\Entity\Grade;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

class GradeRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Grade::class);
    }

    /**
     * Returns the average grade of the subjects in a grade between two given dates
     *
     * @param $gradeName
     * @param $gradeName
     * @param $gradeName
     * @return array
     */
    public function getAverageNoteGrade($gradeName, $startedOn, $finishOn)
	{
        return $this->createQueryBuilder('grade')
                ->select('subject.name','avg(note.note) as average_note')
                ->join('grade.subjects','subject')
                ->join('subject.notes','note')
                ->where('grade.name = :gradeName')
                ->andWhere('note.date BETWEEN :startedOn AND :finishOn')
                ->groupBy('note.subject')
                ->setParameter('gradeName', $gradeName)
                ->setParameter('startedOn', $startedOn)
                ->setParameter('finishOn', $finishOn)
                ->getQuery()
                ->execute();
   }
}