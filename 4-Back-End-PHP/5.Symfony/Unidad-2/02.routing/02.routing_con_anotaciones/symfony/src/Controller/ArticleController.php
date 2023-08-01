<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("blog")
 */
class ArticleController extends AbstractController
{
     /**
     * Match /blog/article/en/2010/my-post
     * Match /blog/article/fr/2012/my-post.rss
     * 
     * @Route(
     *  "/article/{_locale}/{year}/{slug}.{_format}",
     *  name="article",
     *  defaults={"_format": "html"},
     *  requirements={
     *      "_locale": "en|fr",
     *      "_format": "html|rss",
     *      "year": "\d+"
     *  }
     * )
     */
    public function index($_locale, $year, $slug, $_format): JsonResponse
    {
        $message = "Language selected: " .$_locale." year selected: ".$year;
        return $this->json([
            'message' =>  $message,
            'path' => 'src/Controller/ArticleController.php',
        ]);
    }
}
