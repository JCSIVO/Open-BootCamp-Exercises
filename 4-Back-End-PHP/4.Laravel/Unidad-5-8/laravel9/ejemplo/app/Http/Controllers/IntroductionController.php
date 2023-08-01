<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use Illuminate\Http\JsonResponse;
use Log;

class IntroductionController extends Controller
{
    public function index(Request $request){


        $format = $request->input('format');
        if($format == null) $fomat = 'html';


        $year = $request->input('year');
        if ($year == null) $year = date ('Y');


        $maxChars = 30;
        $i = 0;
        // $holaMundo = "<b>Hola Mundo</b>";
        $concepts = [
        [
            'concepto' => 'Curso de Laravel 9',
            'precio' => 20,
            'currency' => 'USD',
            'taxes' => 10,
            'discount' => 0
        ],
        [
            'concepto' => 'Curso de Laravel 9 Avanzado nivel III 2022/2023 impartido Por Jose',
            'precio' => 20,
            'currency' => 'USD',
            'taxes' => 10,
            'discount' => 0
        ],
        [
            'concepto' => 'Licencia Sublime Editor',
            'precio' => 70,
            'currency' => 'USD',
            'taxes' => 21,
            'discount' => 5
        ],
        [
            'concepto' => 'Ordenador MacBook Pro',
            'precio' => 4300,
            'currency' => 'USD',
            'taxes' => 21,
            'discount' => 0
        ],
        ];

        $jsonConcepts = json_encode($concepts);

        $today = date('Y-m-d H:i:s');

        switch ($format) {
            case 'base64':
                return response(base64_encode($jsonConcepts));
                break;
            case 'json':
                return response($jsonConcepts)->header('Content-Type','application/json');
                // return response()->json($concepts);
                break;
            
            default:
                return view('introduccion', [
                    'maxChars' => $maxChars,
                    'i' => $i,
                    'concepts' =>$concepts,
                    'year' => $year,
                    'json_concepts' => $jsonConcepts,
                    'today' => $today,
                ]);
            break;
        }
        // Log::debug('Estás accediendo a la vista de introducción');
        
    }

}
