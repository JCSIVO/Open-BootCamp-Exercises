<?php

namespace App\Service;

use App\Entity\Subject;
use Doctrine\ORM\EntityManagerInterface;

use App\Enum\DataBaseEnum;

class InitializationDataBase {

    private $em;

    public function __construct(EntityManagerInterface $em){
        $this->em = $em;
    }

    public function uploadDataInitial(){
        $this->uploadDataListSubjects();
        return 'Initialized Database';
    }

    public function uploadDataListSubjects(){
        $listSubjects = DataBaseEnum::getListSubjects();
        // setear valore
        $subject_repo = $this->em->getRepository(Subject::class);
        foreach($listSubjects as $item){
            $subject = $subject_repo->findOneBy(['code' => $item['code']]);
            $existSubject = ($subject === NULL) ? false:true;
            if(!$existSubject){
                $newSubject = new Subject();
                $newSubject->setName($item['name']);
                $newSubject->setCode($item['code']);
                $newSubject->setCredects($item['credects']);
                // 
                $this->em->persist($newSubject);
                $this->em->flush();
            }
        }

    }
}