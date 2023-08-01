<?php 

namespace App\Service;

class Greeting {

    public function greet(string $name):string
    {
        return "Hello $name";
    }
}