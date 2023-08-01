<?php

namespace App\Controller;

use App\Entity\Task;
use App\Form\TaskType;
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
        // generate form
        $form = $this->createForm(TaskType::class, $task);
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
