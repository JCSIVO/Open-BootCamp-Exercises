<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
// use Auth;
use Authorization;

class AuthorizationMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next, $minLevel  /*$tag $minLevel = 10*/)
    {
        /*if (!Gate::allows($tag)) {
            abort(403);
        }*/


        // $userRole = Auth::user()->role;

        if(/*$userRole->level*/Authorization::check($minLevel))
            return $next($request);
        return abort(403);
    }
}
