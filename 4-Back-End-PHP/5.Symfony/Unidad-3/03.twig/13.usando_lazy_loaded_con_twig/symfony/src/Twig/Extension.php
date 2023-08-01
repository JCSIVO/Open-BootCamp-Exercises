<?php
// src/Twig/AppExtension.php
namespace App\Twig;

use Twig\Extension\AbstractExtension;
use Twig\TwigFilter;

use App\Twig\AppRuntime;

/* 
 * This extension of twig will only work with the following configuration in config/services.yaml.
 *  autoconfigure: true
 * If the autowiring in services.tml was not activated, the service would have to be declared.
 */ 
class Extension extends AbstractExtension
{ 
    public function getFilters() 
    { 
        return array( 
            new TwigFilter('priceEuro', array(AppRuntime::class, 'priceEuroFilter')), 
            new TwigFilter('priceDolar', array(AppRuntime::class, 'priceDolarFilter')), 
        ); 
    } 
}