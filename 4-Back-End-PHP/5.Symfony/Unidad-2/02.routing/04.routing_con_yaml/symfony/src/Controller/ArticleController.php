<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ArticleController extends AbstractController
{

    public function index($_locale, $year, $slug, $_format): Response
    {
        $message = "Language Selected: ".$_locale." year selected: ".$year." slug selected: ".$slug." _format selected: ".$_format;
        return $this->json([
            'message' => $message,
            'path' => 'src/Controller/ArticleController.php',
        ]);
    }
}
