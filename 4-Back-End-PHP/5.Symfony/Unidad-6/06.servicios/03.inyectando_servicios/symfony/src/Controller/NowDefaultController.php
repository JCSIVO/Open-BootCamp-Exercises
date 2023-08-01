<?php

namespace App\Controller;

use App\Service\MessageGenerator;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class NowDefaultController extends AbstractController
{
    public function __construct(MessageGenerator $messageGenerator){
        $this->messageGenerator = $messageGenerator;
    }

    #[Route('/new', name: 'new_index')]
    public function index(): Response
    {
        if($this->messageGenerator->getHappyMessage()){
            $this->addFlash('success', 'Notification mail was sent succesfully');
        }
        // return
        return $this->render('default/index.html.twig', [
            'controller_name' => 'DefaultController',
        ]);
    }

    #[Route('/new/default', name: 'new_default')]
    public function default(): Response
    {
        // return
        return $this->render('default/index.html.twig', [
            'controller_name' => 'DefaultController',
        ]);
    }
}
