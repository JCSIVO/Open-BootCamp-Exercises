<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
// use Illuminate\Http\JsonResponse;

class MyFirstController extends Controller
{
    //public function index(Request $request){
        // print_r($request->server());
        // print_r($request->header());
        // print_r($request->session());
        /*print_r($request->input('a'));
        die();*/
        // return new Response("Hola Mundo");
        // return new JsonResponse(["Hola Mundo"]);
    //}


    public function myMiddlewareFunction(Request $request){
        echo "<pre>";
            print_r($request->input());
        echo "</pre>";
        echo "Hola Middleware";
        return array([1,2,4]);
    }


    public function myControllerFunction($id = null){
        echo "Hola ID" .$id. "<br />";
        echo $request->input('param');
        /*switch($id){
            case 'hola':
                echo "saludo";
                break;
        }
        echo "Hola" .$id;*/
    }




    public function contactPage() {
        return view('contact');
    }
    public function processContact(Request $request)
    {
        // echo "Formulario Completado con POST";
        // die();
        $input = $request->input();
        // return view('success', $input);
        return redirect()->route('home');
    }
    public function processContactPut(Request $request){
        echo "Formulario Completado con PUT";
        die();
    }
}
