<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{
    #[Route('/default/{max}', name: 'default')]
    public function default(int $max): Response
    {
        // old
        $number = random_int(0, $max);
        return new Response(
            '<html><body>Lucky number: ' . $number . '(selected)</body></html>'
        );
    }

    #[Route('/second', name: 'second')]
    public function second(): Response
    {
        return $this->render('default/index.html.twig', [
            'controller_name' => 'second controller'
        ]);
    }

    #[Route('/redirect-to-path', name: 'redirect_to_path')]
    public function redirectToPath(): Response
    {
        // redirecciones
        return $this->redirect('https://google.es');
    }

    #[Route('/redirect-to-route/{max}', name: 'redirect_to_route')]
    public function redirectToOtherRoute(int $max): Response
    {
        // redirecciones
        return $this->redirectToRoute('default', ['max' => $max], Response::HTTP_MOVED_PERMANENTLY);
    }
}
