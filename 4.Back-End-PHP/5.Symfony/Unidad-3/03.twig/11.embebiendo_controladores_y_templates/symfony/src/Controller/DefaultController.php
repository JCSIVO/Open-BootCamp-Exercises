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
        return $this->render('default/index.html.twig', [
            'controller_name' => 'DefaultController',
        ]);
    }

    public function recentArticles($max = 3)
    {
        // make a database call or other logic
        // to get the "$max" most recent articles
        $articles = 'prueba';

        return $this->render(
            'article/recent_list.html.twig',
            ['articles' => $articles]
        );
    }
}
