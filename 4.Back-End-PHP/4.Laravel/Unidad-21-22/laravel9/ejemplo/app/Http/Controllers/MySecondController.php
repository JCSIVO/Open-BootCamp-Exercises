<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Exception;
use App\Exceptions\CustomValidationException;
use App\Exceptions\MySecondCustomException;

use Session;

class MySecondController extends Controller
{

    // $var = Session::get('myvar'); -> Nos permite obtener una variable de session 
    // Session::put('myvar', 1); -> Nos permite guardar una variable de sesion
    // Session::flash(); -> Equivvalente a session put y despues de hacer un Get hace un Forget
    // Session::forget('myvar'); -> Nos oermite borrar esa variable de sessionde nuestra memoria
    
    // Session::hast('myvar') -> para comprobar si existe dicha variable de session


    /*Session::flash() => {
        Session::put('myvar');
    }
    Session::get('myvar'); => Session::forget('myvar');*/

    // private $title = 'My Title';
    // private $time;


    /*public function __construct()
    {
        $this->myCustomFunction();
        // $this->title = "My construct title";
        $this->time = date('d/m/Y H:i');
        // $this->middleware('auth');
    }*/

    protected $_isJson;

    public function index($index = null) {

        $this->_isJson = request()->isJson();



        // $this->_isJson = true;
        try {
            1 / 1;
            $this->_generateException();
            // 1 / 0;
        } catch (CustomValidationException $e) {
            // abort(404);
            echo "Excepción Custom";
            echo $e->getMessage();
        }catch (MySecondCustomException $e) {
            echo "Excepción Custom 2";
            $error = [
                'message' => $e->getMessage(),
                'data' => $e->getData(),
            ];
            return response()->json($error);
            echo $e->getMessage();
            print_r($e->getData());
        }catch (Exception $e) {
            // abort(400);
            echo "Excepción General";
            echo $e->getMessage();
        }finally{
            echo "Esto se ejecuta el 100% de las veces";
        }


        /*$array = [
            "Pepe",
            "Blanca",
            "Isabel",
            "Belen",
        ];
        $html = "";
        foreach($array as $n){
            $html .= view('home');
            // $html .= "<p>" . $n . "</p>";
        }
        return response($html);

        return response(json_encode($array))->header('content-type', 'application/json');
        return response("<user>JCSivo</user>")->header('content-type', 'text/javascript');
        return response("<user>JCSivo</user>")->header('content-type', 'application/xml');
        return response("<h1>Hola</h1>");
        return redirect()->back();
        return redirect()->route('website.home');
        return view('home');*/
        // echo $this->title."<br />";
        // echo $this->time;
    } 

    private function _generateException(){
        if($this->_isJson)
            throw new MySecondCustomException("Se ha generado una excpción personalizada", [
                'name' => 'JCSivo'
            ]);
        throw new CustomValidationException("Excepceción que no es JSON");
    }

    // public function indexSecond($variable = null){}

    /*private function myCustomFunction(){
        $this->title = 'My Construct title from private';
    }*/
}
