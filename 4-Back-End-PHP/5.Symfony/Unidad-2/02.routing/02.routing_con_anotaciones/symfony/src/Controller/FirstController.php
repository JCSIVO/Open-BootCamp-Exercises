<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;


class FirstController extends AbstractController
{
   /**
     * @Route("/first", name="first")
     */
    public function index(): JsonResponse
    {
        
        return $this->json([
            'message' =>'Welcome to your new controller!',
            'path' => 'src/Controller/FirstController.php',
        ]);
    }

    /**
     * @Route("/second", name="second")
     */
    public function second(): JsonResponse
    {
        return $this->json([
            'message' => 'Welcome to your new controller!',
            'path' => 'src/Controller/FirstController.php',
        ]);
    }
}
