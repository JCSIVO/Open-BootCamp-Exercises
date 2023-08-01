<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

use Symfony\Component\HttpFoundation\Request;
// entity Manager
use Doctrine\ORM\EntityManagerInterface;
// entities
use App\Entity\Alumno;
use App\Entity\Asignatura;
use App\Entity\Nota;

class AlumnosController extends AbstractController
{
    #[Route('/', name: 'lista_de_alumnos')]
    public function index(EntityManagerInterface $entityManager): Response
    {
        // Load User_repo
        $pupils_repo = $entityManager->getRepository(Alumno::class);
        $listPupils = $pupils_repo->findAll();
        // dd($listPupils);
        return $this->render('alumnos/list.html.twig', [
            'listPupils' => $listPupils,
        ]);
    }

    #[Route('/notas-de-alumno/{id}', name: 'notas_de_alumno')]
    public function notasDeAlumno(EntityManagerInterface $entityManager, $id): Response
    {
        // Load User_repo
        $pupils_repo = $entityManager->getRepository(Alumno::class);
        $pupil = $pupils_repo->findOneBy(['id' => $id]);
        $note_repo = $entityManager->getRepository(Nota::class);
        $notes = $note_repo->getListSubjects($id);
        // dd($listPupils);
        return $this->render('alumnos/note.html.twig', [
            'subjectsList' => $notes,
        ]);
    }

    #[Route('/asignaturas-de-alumno/{id}', name: 'asignaturas_de_alumno')]
    public function asignaturasDeAlumno(EntityManagerInterface $entityManager, $id): Response
    {
        // Load User_repo
        $pupils_repo = $entityManager->getRepository(Alumno::class);
        $pupil = $pupils_repo->findOneBy(['id' => $id]);
        $subjects_repo = $entityManager->getRepository(Asignatura::class);
        $listSubjects = $subjects_repo->findAll();
        // dd($listPupils);
        return $this->render('alumnos/subjects.html.twig', [
            'listSubjects' => $listSubjects,
            'pupil' => $pupil
        ]);
    }

    #[Route('/cambiar-asignatura-alumno', name: 'subject_pupil_change')]
    public function subjectPupilChange(Request $request, EntityManagerInterface $entityManager): Response
    {
        $pupilId = (integer) $request->get('pupilId');
        $subjectId = (integer) $request->get('subjectId');
        // dd($subjectId);
        // Load User_repo
        $subjects_repo = $entityManager->getRepository(Asignatura::class);
        $subject = $subjects_repo->findOneBy(['id' => $subjectId]);
        $pupils_repo = $entityManager->getRepository(Alumno::class);
        $pupil = $pupils_repo->findOneBy(['id' => $pupilId]); 
        // 
        $pupilsSubject = $subject->getAlumno();
        $exist = false;
        foreach($pupilsSubject as $key=> $value){
            if($value == $pupil){
                $exist = true;
            }
        }
        if(!$exist){
            $subject->addAlumno($pupil);
        }else{
            $subject->removeAlumno($pupil);
        }
        $entityManager->persist($subject);
        $entityManager->flush();
        return new JsonResponse(['result' => 'ok'], JsonResponse::HTTP_OK);
    }
}
