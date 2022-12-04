<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{
    #[Route('/default', name: 'default')]
    public function default(): Response
    {
        throw new NotFoundHttpException('El producto solicitado no existe');
        return new Response(
            '<html><body>Lucky number: 5 (selected)</body></html>'
        );
    }

}
