<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{
    #[Route('/default', name: 'default')]
    public function index(): Response
    {
        $message = "<script>alert('hello!')</script>";
        return $this->render('default/index.html.twig', [
            'controller_name' => 'FirstController',
            'message'=>$message
        ]);
    }

}
