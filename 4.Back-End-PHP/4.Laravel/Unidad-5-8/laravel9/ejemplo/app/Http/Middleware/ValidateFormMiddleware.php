<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class ValidateFormMiddleware
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
        $input = $request->except(['_token']);
        $formValid = true;
        $error = [];
        if(strlen($input['name']) == 0){
            $formValid = false;
            $error[] = "El nombre esta vacío";
        }
        if(strlen($input['email']) == 0){
            $formValid = false;
            $error[] = "El Email esta vacío";
        }
        if(strlen($input['phone']) == 0){
            $formValid = false;
            $error[] = "El phone esta vacío";
        }
        if(strlen($input['message']) == 0){
            $formValid = false;
            $error[] = "El message esta vacío";
        }
        if(!$formValid){
            // \Log::debug("Ha pasado por la Valdicación");
            return redirect()->back()->withInput();
        }        
        return $next($request);
    }
}
