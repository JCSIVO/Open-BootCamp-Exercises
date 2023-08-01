<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{
    #[Route('/default', name: 'default')]
    public function default(): Response
    {
        return $this->json([
            'message' => 'Welcome to your new controller!',
            'path' => 'src/Controller/DefaultController.php',
        ]);
    }


    #[Route('/twig', name: 'twig')]
    public function twig(): Response
    {
        return $this->render('twig/index.html.twig', [
            'controller_name' => 'TwigController',
        ]);
    }
}
