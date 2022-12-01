<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{
    #[Route('/default/{parameter}', name: 'default')]
    public function default($parameter = ''): Response
    {
        return $this->json([
            'parameter' => $parameter,
            'message' => 'Welcome to your new controller!',
            'path' => 'src/Controller/DefaultController.php',
        ]);
    }


    #[Route('/twig-2', name: 'twig_2')]
    #[Route('/twig', name: 'twig')]
    public function twig(): Response
    {
        // dump('Hello world');
        // dd('Hello World con DD');
        return $this->render('twig/index.html.twig', [
            'otra_variable' => 'contenido de otra variable',
            'controller_name' => 'TwigController',
        ]);
    }

    #[Route('/legal-privacy', name: 'legal_privacy')]
    public function legalPrivacy(): Response
    {
        // dump('Hello world');
        // dd('Hello World con DD');
        return $this->render('static/privacy.html.twig', [
            'site_name' => 'contenido de otra variable'
        ]);
    }
    #[Route('/output-scaping', name: 'output_scaping')]
    public function outputScaping(): Response
    {
        // dump('Hello world');
        // dd('Hello World con DD');
        return $this->render('output_scaping.html.twig', [
            'script' => "<script>alert('hello')</script>"
        ]);
    }
}
