<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends AbstractController
{
    #[Route(path: [
        'en' => '/default',
        'es' => '/por-defecto'
      ], name: 'default')]
    public function index(Request $request): Response
    {
        $locale = $request->getLocale();
        return $this->json([
            'locale' => $locale,
            'message' => 'Welcome to your new controller!',
            'path' => 'src/Controller/DefaultController.php',
        ]);
    }
}
