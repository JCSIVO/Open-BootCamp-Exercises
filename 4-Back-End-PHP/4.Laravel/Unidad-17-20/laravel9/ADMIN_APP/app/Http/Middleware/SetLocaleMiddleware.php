<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App;
use Session;
use Auth;

class SetLocaleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if(Auth::check()){
            $locale = Auth()->user()->locale;
            if(Session::has('locale'))
                $locale = Session::get('locale','es');
            App::setlocale($locale);
            return $next($request);
        }

        $locale = Session::get('locale', 'es');
        App::setlocale($locale);
        return $next($request);

        // Session::forget('locale');
        // return $next($request);
    }
}
