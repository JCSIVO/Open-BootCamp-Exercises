<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{
    #[Route('/default', name: 'default')]
    public function default(Request $request): Response
    {
        $isAjax = $request->isXmlHttpRequest();
        dump($isAjax);
        $locale = $request->getPreferredLanguage(['en', 'fr']);
        dump($locale);
        // saber si es post o get
        if($request->query->has('page')){
            $value = $request->get('page');
            dump($value);
        }
        return $this->render('default/index.html.twig', [
            'controller_name' => 'default controller'
        ]);
    }

}
