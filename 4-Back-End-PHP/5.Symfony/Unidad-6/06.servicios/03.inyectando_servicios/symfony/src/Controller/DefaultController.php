<?php

namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
// service
use App\Service\MessageGenerator;

class DefaultController extends AbstractController
{
    #[Route('/', name: 'index')]
    public function index(MessageGenerator $messageGenerator): Response
    {
        if($messageGenerator->getHappyMessage()){
            $this->addFlash('success', 'Notification mail was sent succesfully');
        }
        // return
        return $this->render('default/index.html.twig', [
            'controller_name' => 'DefaultController',
        ]);
    }

    #[Route('/default', name: 'default')]
    public function default(): Response
    {
        // return
        return $this->render('default/index.html.twig', [
            'controller_name' => 'DefaultController',
        ]);
    }
}
