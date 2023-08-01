<?php

namespace App\Validator\Constraints;

use Symfony\Component\Validator\Constraint;

#[\Attribute]
class ContainsAlphanumeric extends Constraint{
    public $message = ' La cadena "{{string}}" contiene caracteres ilegales';
}