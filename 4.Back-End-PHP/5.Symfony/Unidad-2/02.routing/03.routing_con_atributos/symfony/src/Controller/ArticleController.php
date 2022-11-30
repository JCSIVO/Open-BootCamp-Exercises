<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/** 
 * @Route("/blog")
 */
class ArticleController extends AbstractController
{
    /** 
     * Match /blog/article/en/2010/my-post
     * Match /blog/article/fr/2012/my-post.rss
     **/
    #[Route('/article/{_locale}/{year}/{slug}.{_format}', 
        name: 'article',
        defaults: ['_formats' => 'html'],
        requirements: [
            '_locale' => 'en|fr',
            '_format' => 'html|rss',
            'year' => '\d+'
        ])
    ]
    public function index($_locale, $year, $slug, $_format): Response
    {
        $message = "Language Selected: ".$_locale." year selected: ".$year." slug selected: ".$slug." _format selected: ".$_format;
        return $this->json([
            'message' => $message,
            'path' => 'src/Controller/ArticleController.php',
        ]);
    }
}
