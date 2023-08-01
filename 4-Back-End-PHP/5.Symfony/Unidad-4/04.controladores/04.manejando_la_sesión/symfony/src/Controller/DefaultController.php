<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{
    #[Route('/default', name: 'default')]
    public function default(SessionInterface $session): Response
    {
        // setea un valor en sessio
        $session->set('variableFoo', 'Hello World');
        // se trae un valor de variable en session
        $variableFoo = $session->get('variableFoo');
        dump($variableFoo);
        // pregunta si existe la variable en session
        $foobar = $session->has('foobar');
        dump($foobar);
        $existVariableFoo = $session->has('variableFoo');
        dump($existVariableFoo);
        // usa un valor por defecto en caso de no existir
        $filters = $session->get('filters', array());
        dump($filters);
        // destruir session
        $invalidate = $session->invalidate();
        dump($invalidate);
        // limpiar toda la sessión
        $clear = $session->clear();
        dump($clear);
        $session->set('variableFoo', 'Hello World 2');
        $variableFoo = $session->get('variableFoo');
        dump($variableFoo);
        return $this->render('default/index.html.twig', [
            'controller_name' => 'default controller'
        ]);
    }

}
