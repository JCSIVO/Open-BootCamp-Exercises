<?php

namespace App\Controller;

use App\Entity\Task;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{
    #[Route('/default', name: 'default')]
    public function index(Request $request, EntityManagerInterface $entityManager): Response
    {
        $task = new Task();
        $task->setTask("Primera Tarea");
        $task->setDueDate(new \DateTime('tomorrow'));

        // generate form
        $form = $this->createFormBuilder($task)
            ->add('task', TextType::class)
            ->add('dueDate', DateType::class)
            ->add('save', SubmitType::class, ['label' => 'create task'])
            ->getForm();
        $form->handleRequest($request);
        // 
        if($form->isSubmitted() && $form->isValid()){
            $entityManager->persist($task);
            $entityManager->flush();
            return $this->redirectToRoute('default');
        }
        // return 
        return $this->render('default/index.html.twig', [
            'form' => $form->createView()
        ]);
    }
}
