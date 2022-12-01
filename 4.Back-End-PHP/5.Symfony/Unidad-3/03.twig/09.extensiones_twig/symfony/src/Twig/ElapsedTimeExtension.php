<?php
// src/Twig/ElapsedTimeExtension.php
namespace App\Twig;

use Twig\Extension\AbstractExtension;
use Twig\TwigFilter;

/* 
 * This extension of twig will only work with the following configuration in config/services.yaml.
 *  autoconfigure: true
 * If the autowiring in services.tml was not activated, the service would have to be declared.
 */ 
class ElapsedTimeExtension extends AbstractExtension
{
    
    /**
     * Declaración de los filtros que hay en este archivo
     */
    public function getFilters()
    {
        return array(
            new TwigFilter('tt', array($this, 'ttFilter')),
        );
    }  

    /**
     * Function that transforms the elapsed time into a user-friendly text
     *
     * @param DateTime $date
     * @return string
     */
    public function ttFilter(\DateTime $date): string
    {
        $interval = date_diff($date, new \DateTime());
        if ($interval->y >= 1) {
            return 'It`s '.$interval->y.' years';
        } elseif ($interval->m >= 1 && $interval->m < 12) {
            return 'It`s '.$interval->m.' months';
        } elseif ($interval->d >= 1 && $interval->d < 30) {
            return 'It`s '.$interval->d.' days';
        } elseif ($interval->h >= 1 && $interval->h < 24) {
            return 'It`s '.$interval->h.' hours';
        } elseif ($interval->i >= 1 && $interval->i < 60) {
            return 'It`s '.$interval->i.' minutes';
        } elseif ($interval->s < 60) {
            return 'Now';
        }
    }
}