<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Http\JsonResponse;
use Auth;

class ExampleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next, $role = 'user')
    {
        // $next -> Lo que ocurrira despues 
        // $request -> La información 

        // Primero ejecuto el codigo
        // $result = $next($request);
        // return result;

        // Primero ejecuto el codgio del Middleware y luego el asociado a la ruta
        // if(1 == 1)
        // return abort(403);

        // Evaluar que es una peticion hecha mdeiante JSON, AJAX  

        // $haveIdParamInGet = $request->input('id');
        // $user = Auth::user();
        // if(Auth::check() && Auth::id() == 1 && $user->id_role == 2);
        // if($haveIdParamInGet && $haveIdParamInGet = 123)
            // return $next($request);
        // return abort(403);
        // return Response("No tienes permisos para hacer está acción ");
        // return response(null, 403);

        $result = $next($request);
        $finalResult = json_encode($result);
        return Response($finalResult,200)->header('Content-Type','application/json');
        // return JsonResponse($finalResult);

        if($role == 'all'){
            $id = $request->input('id');


            $request->merge([
                'role'=> $role,
                'date-of-permission' => microtime(true),
                'has-id' => $id != null,
            ]);
            return $next($request);
        }

        $auxRole = 1;

        $idRole = ($role == 'user')?1:2;
        $user = auth::user();
        
        // $roleOfTheUser = $user->id_role;
        $roleOfTheUser = 2;
        if($roleOfTheUser == $idRole)
            $request->merge(['role'=> $role]);
            return $next($request);
        return Response("Los usuarios de tipo " .$role. " no pueden acceder a esta seccion ");
    }
}
