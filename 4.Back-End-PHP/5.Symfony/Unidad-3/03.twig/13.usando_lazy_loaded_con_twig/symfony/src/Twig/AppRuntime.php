<?php
namespace App\Twig;

use Twig\Extension\RuntimeExtensionInterface;

class AppRuntime implements RuntimeExtensionInterface{

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