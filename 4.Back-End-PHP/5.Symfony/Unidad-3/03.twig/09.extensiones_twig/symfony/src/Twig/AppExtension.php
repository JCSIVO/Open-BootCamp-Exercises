<?php
// src/Twig/AppExtension.php
namespace App\Twig;

use Twig\Extension\AbstractExtension;
use Twig\TwigFilter;

/* 
 * This extension of twig will only work with the following configuration in config/services.yaml.
 *  autoconfigure: true
 * If the autowiring in services.tml was not activated, the service would have to be declared.
 */ 
class AppExtension extends AbstractExtension
{ 
    public function getFilters() 
    { 
        return array( 
            new TwigFilter('priceEuro', array($this, 'priceEuroFilter')), 
            new TwigFilter('priceDolar', array($this, 'priceDolarFilter')), 
        ); 
    } 
    public function priceEuroFilter($number, $decimals = 0, $decPoint = '.', $thousandsSep = ',') 
    { 
        $price = number_format($number, $decimals, $decPoint, $thousandsSep); 
        $price = $price.'€'; 
        return $price; 
    } 
    public function priceDolarFilter($number, $decimals = 0, $decPoint = '.', $thousandsSep = ',') 
    { 
        $price = number_format($number, $decimals, $decPoint, $thousandsSep); 
        $price = '$'.$price; 
        return $price; 
    } 
} 