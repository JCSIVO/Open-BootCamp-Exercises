<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    /*public function Example() {
        $publicKey = config('parameters.key');
        config('parameters.key', 'my-other-key');
        $publicKey = config('parameters.key');

        $myVarible = env('APP_NAME','No value');
        // Laravel 9
    }*/
}
