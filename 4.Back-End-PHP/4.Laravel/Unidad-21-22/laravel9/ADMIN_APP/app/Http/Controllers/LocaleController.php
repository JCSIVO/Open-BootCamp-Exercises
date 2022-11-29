<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;

class LocaleController extends Controller
{
    public function setLocale($locale){
        $accepted = ['en', 'es'];

        if(in_array($locale, $accepted))
            Session::put('locale', $locale);
        return redirect()->back();
    }
}
