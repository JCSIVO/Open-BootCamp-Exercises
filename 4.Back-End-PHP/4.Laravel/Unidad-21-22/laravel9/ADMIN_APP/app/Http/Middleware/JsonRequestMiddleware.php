<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class JsonRequestMiddleware
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
        if ($request->isJson()){
            $token =$request->header('token');
            if ($token != null && $token == 'ASDF'){
                return $next($request); 
            }
            abort(403);
        }
        abort(400);

        // 200 -> Ok
        // 201 -> ok con insercion de datos
        // 204 -> ok pero sin respuesta 
        // 301 -> redireccion permanente
        // 300 -> Redireccion temporal


        // 400 -> peticion mal hecha 
        // 403 -> Falta de permisos
        // 401 -> metodo http mal utilizado
        // 404 -> Registro no encontrado
        // 419 -> Pagina expirada   
        

        // 500 -> Error en el servidor 
    }
}
