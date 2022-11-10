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
    public function contactPage() {
        return view('contact');
    }
    public function processContact(Request $request)
    {
        echo "Formulario Completado con POST";
        die();
    }
    public function processContactPut(Request $request){
        echo "Formulario Completado con PUT";
        die();
    }
}
