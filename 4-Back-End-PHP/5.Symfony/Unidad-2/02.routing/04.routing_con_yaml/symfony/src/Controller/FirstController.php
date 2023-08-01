<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FirstController extends AbstractController
{
    public function index(): Response
    {
        return $this->json([
            'message' => 'Welcome to your new controller from yaml file!',
            'path' => 'src/Controller/FirstController.php',
        ]);
    }

}
