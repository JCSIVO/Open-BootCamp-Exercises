<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use App\Service\MessageGenerator;

class DefaultController extends AbstractController
{
    #[Route('/default', name: 'default')]
    public function index(Request $request, MessageGenerator $messageGenerator): Response
    {
        $message = $messageGenerator->getHappyMessage();
        dump($message);
        return $this->render('default/index.html.twig', [
            'controller_name' => 'DefaultController',
        ]);
    }
}
