<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CustomRouteController extends AbstractController
{
    #[Route('/custom/route', name: 'custom_route')]
    public function index(): Response
    {
        return $this->render('custom_route/index.html.twig', [
            'controller_name' => 'CustomRouteController',
        ]);
    }

    public function extra($parameter): Response
    {
        return $this->render('custom_route/index.html.twig', [
            'parameter' => $parameter,
            'controller_name' => 'CustomRouteController',
        ]);
    }
}
