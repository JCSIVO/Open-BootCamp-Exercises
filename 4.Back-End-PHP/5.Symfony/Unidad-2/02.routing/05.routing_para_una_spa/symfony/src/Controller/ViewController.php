<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ViewController extends AbstractController
{

    #[Route(
        '/view/{route}',
        name: 'vue_pages_attributes',
        requirements: [
            'route' => '^.+'
        ]
   )]
    public function withAttributes($route): Response
    {
        return $this->json([
            'param' => $route,
            'message' => 'Welcome to your new controller!',
            'path' => 'src/Controller/ViewController.php - withAttributes',
        ]);
    }

    /**
     * @Route("/view", name="view")
     * @Route("/{route}", name="vue_pages", requirements={"route"="^.+"})
     */
    public function index($route): Response
    {
        return $this->json([
            'param' => $route,
            'message' => 'Welcome to your new controller!',
            'path' => 'src/Controller/ViewController.php - index',
        ]);
    }

}
