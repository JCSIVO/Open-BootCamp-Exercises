<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyFirstController;
// use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::view('/', 'home');
Route::get('/contacto', [ MyFirstController::class, 'contactPage' ]);

Route::post('/contacto', [ MyFirstController::class, 'processContact' ]);
Route::put('/contacto', [ MyFirstController::class, 'processContactPut' ]);

// Route::put('/contacto', [ MyFirstController::class, 'contactPage' ]);
// Route::patch('/contacto', [ MyFirstController::class, 'contactPage' ]);
// Route::delete('/contacto', [ MyFirstController::class, 'contactPage' ]);
// Route::head('/contacto', [ MyFirstController::class, 'contactPage' ]);
// Route::options('/contacto', [ MyFirstController::class, 'contactPage' ]);

// Route::match(['GET','POST'],'/uri', [ MyFirstController::class, 'matchedFunction' ]);
// Route::any('/example', [ MyFirstController::class, 'anyFunction' ]);
// Route::redirect('/route1', '/route2'); // devuelve un 302
// Route::redirectPermanent('/route1', '/route2'); // 301


 Route::get('/example',[ MyFirstController::class, 'index' ]);

/*Route::get('/example',function(Request $request){
    echo"Desde ruta";
    print_r($request->input('a'));
    die();
});*/


/*Route::get('/', function () {


    $data = [
        1,2,3,4,5,6,7,8,9,10
    ];
    echo "Hola Mundo";




    return view('pagina', [ // Cambiando pagina por welcome cambia la pagina
        'data'=> $data
    ]);
});*/
