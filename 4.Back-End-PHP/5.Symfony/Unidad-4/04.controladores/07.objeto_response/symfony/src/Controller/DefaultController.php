<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{
    #[Route('/default', name: 'default')]
    public function default(Request $request): Response
    {
        $response = new Response();
        $response->setContent(json_encode(['data' => 123]));
        $response->headers->set('Content-Type', 'application/json');
        return $response;
    }

}
