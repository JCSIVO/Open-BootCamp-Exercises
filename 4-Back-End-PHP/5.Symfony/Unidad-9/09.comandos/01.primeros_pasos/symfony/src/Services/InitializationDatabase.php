<?php

namespace App\Services;

use Doctrine\ORM\EntityManagerInterface;

use Symfony\Component\Console\Helper\ProgressBar;

use App\Enum\DataBaseEnum;
use App\Enum\DataBaseAddressEnum;

use App\Entity\ListAddressCcaa;
use App\Entity\ListAddressCity;
use App\Entity\ListAddressProvince;

use App\Entity\Grade;
use App\Entity\Note;
use App\Entity\Pupil;
use App\Entity\Subject;

class InitializationDatabase
{
    private $em;
    public function __construct(EntityManagerInterface $em) {
        $this->em = $em;
    }
    public function uploadDataInitial ()
    {
        $this->uploadDataListPupils();
        $this->uploadDataListSubjects();
        $this->uploadDataPupilsSubjects();
        $this->uploadDataNotes();
        return 'Initialized database';
    }
    public function uploadDataAddressInitial ()
    {
        $this->uploadAddress();
        return 'Initialized database Address';
    }
    public function uploadAddress()
    {
        echo "Be patient. It will proceed to load the database of cities... ";
        $listCities = DataBaseAddressEnum::getListCCAA();
        foreach ( $listCities as $keyCCAA => $valueCCAA ) {
            $newCCAA = new ListAddressCcaa();
            $newCCAA->setCcaa($keyCCAA);
            $this->em->persist($newCCAA);
            $this->em->flush();
            print('-'.$keyCCAA);
            foreach ( $valueCCAA as $keyProvince => $valueProvince ) {
                $newProvince = new ListAddressProvince();
                $newProvince->setCcaa($newCCAA);
                $newProvince->setProvince($keyProvince);
                $this->em->persist($newProvince);
                $this->em->flush();
                print('-'.$keyProvince);
                foreach ( $valueProvince as $keyCity => $valueCity ) {
                    $newCity = new ListAddressCity();
                    $newCity->setCity($valueCity['city']);
                    $newCity->setCp($valueCity['cp']);
                    $newCity->setProvince($newProvince);
                    $this->em->persist($newCity);
                    $this->em->flush();
                    print('-'.$valueCity['cp'].'-'.$valueCity['city']);
                }
            }
        }
    }
    public function uploadDataListPupils()
    {
        $listPupils = DataBaseEnum::getListPupils();
        $listPupils_repo = $this->em->getRepository(Pupil::class);
        $listGrades_repo = $this->em->getRepository(Grade::class);
        foreach ( $listPupils as $key => $value) {
            $pupil = $listPupils_repo->findOneBy(array('nExpedient'=>$value['n_expedient']));
            $existPupil = ( $pupil === NULL )? false : true ;
            if ( !$existPupil ) {
                $newPupil = new Pupil();
                $newPupil->setNExpedient($value['n_expedient']);
                $newPupil->setName($value['name']);
                $newPupil->setLastname($value['lastname']);
                $newPupil->setBirthdate(new \DateTime($value['birthdate']));
                $newPupil->setGender($value['gender']);
                $newPupil->setEmail($value['email']);
                $newPupil->setPhone($value['phone']);
                $newPupil->setGrade(
                    $listGrades_repo->findOneByName($value['grade'])
                );
                $this->em->persist($newPupil);
                $this->em->flush();
            }
        }
    }
    public function uploadDataListSubjects()
    {
        $listSubjects = DataBaseEnum::getListSubjects();
        $listSubjects_repo = $this->em->getRepository(Subject::class);
        $listGrades_repo = $this->em->getRepository(Grade::class);
        foreach ( $listSubjects as $keyGrade => $valueGrade) {
            $grade = $listGrades_repo->findOneBy(array('name'=>$keyGrade));
            $existGrade = ( $grade === NULL )? false : true ;
            if ( !$existGrade ) {
                $newGrade = new Grade();
                $newGrade->setName($keyGrade);
                $this->em->persist($newGrade);
                $this->em->flush();
                $grade = $newGrade;
            }
            foreach ( $valueGrade as $keySubject => $valueSubject) {
                $subject = $listSubjects_repo->findOneBy(array('name'=>$valueSubject['name']));
                $existSubject = ( $subject === NULL )? false : true ;
                if ( !$existSubject ) {
                    $newSubject = new Subject();
                    $newSubject->setName($valueSubject['name']);
                    $newSubject->setCode($valueSubject['code']);
                    $newSubject->setEnglishName($valueSubject['english_name']);
                    $newSubject->setCredects($valueSubject['credects']);
                    $newSubject->setGrade($grade);
                    $this->em->persist($newSubject);
                    $this->em->flush();
                }
            }
        }
    }
    public function uploadDataPupilsSubjects()
    {
        $pupilsSubjects = DataBaseEnum::getPupilsSubjects();
        $listPupils_repo = $this->em->getRepository(Pupil::class);
        $listSubjects_repo = $this->em->getRepository(Subject::class);
        foreach ( $pupilsSubjects as $key => $value) {
            $pupil = $listPupils_repo->findOneBy(array('nExpedient'=>$value['pupil']));
            $subject = $listSubjects_repo->findOneBy(array('code'=>$value['subject']));
            $pupil->addSubject($subject);
            $this->em->persist($pupil);
            $this->em->flush();
        }
    } 
    public function uploadDataNotes()
    {
        $notes = DataBaseEnum::getNotes();
        $listPupils_repo = $this->em->getRepository(Pupil::class);
        $note_repo = $this->em->getRepository(Note::class);
        $listSubjects_repo = $this->em->getRepository(Subject::class);
        foreach ( $notes as $key => $value) {
            $pupil = $listPupils_repo->findOneBy(array('nExpedient'=>$value['pupil']));
            $subject = $listSubjects_repo->findOneBy(array('code'=>$value['subject']));
            $note = $note_repo->findOneBy(
                array(
                    'subject'=>$subject, 
                    'pupil'=>$pupil,
                    'nConvocation'=>$value['nConvocation']
                )
            );
            $existNote = ( $note === NULL )? false : true ;
            if ( !$existNote ) {
                $newNote = new Note();
                $newNote->setSubject($subject);
                $newNote->setPupil($pupil);
                $newNote->setNConvocation($value['nConvocation']);
                $newNote->setDate(new \DateTime($value['date']));
                $newNote->setNote($value['note']);
                $this->em->persist($newNote);
                $this->em->flush();
            }
        }
    }         
}