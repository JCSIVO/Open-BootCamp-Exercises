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
        $date = \DateTime::createFromFormat('Y-m-d H:i','1985-11-08 09:01');
        return $this->render('default/index.html.twig', [
            'controller_name' => 'DefaultController',
            'price'=> 589.4145234523453,
            'date' => $date,
        ]);
    }
}
