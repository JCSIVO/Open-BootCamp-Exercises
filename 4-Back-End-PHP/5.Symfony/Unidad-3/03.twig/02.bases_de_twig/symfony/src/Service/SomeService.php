<?php

namespace App\Service;

use Twig\Environment;

class SomeService{

    private $twig;
    public function __construct(Environment $twig)
    {
        $this->twig = $twig;
    }

    public function someMethod(){
        $htmlContents = $this->twig->render('product/index.html.twig', [
            'category' => 'una categoria'
        ]);
        return $htmlContents;
    }

    public function existRoute($template){
        return $this->twig->getLoader()->exists($template);
    }
}