<?php

namespace App\Authorization;

use Auth;

class Authorization{
    static function check($minLevel){
        if(Auth::check()){
            $userRole = Auth::user()->role;
            return $userRole->level >= $minLevel;
        }
        return false;
    }
    static function test(){
        return 'Test';
    }
}