<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends AbstractController
{
    /* Matched /default/about-us.html
     */
    #[Route(
        '/default/{slug}.{_format}',
        name: 'first_show',
        defaults: ['_formats' => 'html'],
        requirements: [
            '_format' => 'html|json|rss',
        ]
    )]
    public function index(Request $request): Response
    {
        $message = "Example Others Formats";
        $format = $request->getRequestFormat();
        return $this->render('default/index.' . $format . '.twig', array(
            'message' => $message,
            'controller_name' => 'DefaultController',
        ));
    }

    #[Route('/second', name: 'second')]
    public function second(): Response
    {
        return $this->render('default/index.html.twig', [
            'controller_name' => 'DefaultController',
        ]);
    }
}
