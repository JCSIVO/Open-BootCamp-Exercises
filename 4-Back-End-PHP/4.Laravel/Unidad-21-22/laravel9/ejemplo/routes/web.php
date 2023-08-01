<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyFirstController;
use App\Http\Controllers\IntroductionController;
use App\Http\Controllers\WebsiteController;
use App\Http\Controllers\MySecondController;
use App\Http\Controllers\MyResourceController;
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

Route::resource('/resource',MyResourceController::class);

/**
 * Rutas Creadas con el metodo resource
 * Route::get('/resource',[MyResourceController::class, 'index'])->name('resource.index');
 * Route::get('/resource/create',[MyResourceController::class, 'create'])->name('resource.create');
 * Route::post('/resource',[MyResourceController::class, 'store'])->name('resource.store');
 * Route::get('/resource/{resource}',[MyResourceController::class, 'show'])->name('resource.show');
 * Route::get('/resource/{resource}/edit',[MyResourceController::class, 'edit'])->name('resource.edit');
 * Route::match(['PUT', 'PATCH'],'/resource/{resource}',[MyResourceController::class, 'update'])->name('resource.update');
 * Route::delete('/resource/{resource}',[MyResourceController::class, 'destroy'])->name('resource.destroy');
 */



Route::get('home',[MySecondController::class, 'index']);
Route::post('home',[MySecondController::class, 'index']);
Route::put('home',[MySecondController::class, 'index']);

Route::get('home/{variable?}',[MySecondController::class, 'indexSecond']);
Route::get('contact',[MySecondController::class, 'index']);





Route::name('website.')->prefix('/website')->group(function(){
    Route::get('{section}',[WebsiteController::class, 'section'])->name('section');
    
    Route::get('home',[WebsiteController::class, 'home'])->name('home');
    Route::get('who-we-are',[WebsiteController::class, 'who'])->name('who');
    Route::get('contact',[WebsiteController::class, 'contact'])->name('contact');


    Route::post('personalize',[WebsiteController::class, 'personalize'])->name('personalize');
    Route::post('contact',[WebsiteController::class, 'sendContact'])->name('send-contact');
});



Route::get('/introduccion-a-blade',[IntroductionController::class, 'index'])->name('introduccion');

// Route::view('/introduccion-a-blade', 'introduccion')->name('introduccion');




/*Route::view('/example', 'routename');

Route::get('/login',function(){
    echo "Esta es la URl de login";
})->name('login');*/


/*Route::middleware('example.middleware:all')->group(function(){
    Route::middleware('example.middleware:all')->get('/login', []);
});*/

// Route::middleware('example.middleware:all')->get('/middle', [ MyFirstController::class, 'myMiddlewareFunction']);

/*Route::middleware(['auth','example.middleware:admin'])->prefix('/category')->name('category.')->group(function(){
        Route::prefix('/post')->name('post.')->group(function($cadena ){
            Route::get('/',function(){
                echo "Hola segundo";
                // return redirect()->route('myindex');
            })->name('show');
             
            Route::get('/{isNew}}',function(){
                echo "Hola tercero";
            })->name('new')->where('isNew'.'[0-9]');
    
            Route::get('/edit/{id}',function(){
                echo "Hola tercero";
            });
        });
        Route::get('/my-first-level-example',function(){
            echo "Hola primer nivel";
        });
    });

    Route::middleware('example.middleware:user')->prefix('/category2')->name('category2.')->group(function(){
        Route::prefix('/post2')->name('post2.')->group(function($cadena ){
            Route::get('/',function(){
                echo "Hola segundo";
                // return redirect()->route('myindex');
            })->name('show');
             
            Route::get('/{isNew}}',function(){
                echo "Hola tercero";
            })->name('new')->where('isNew'.'[0-9]');
    
            Route::get('/edit/{id}',function(){
                echo "Hola tercero";
            });
        });
        Route::get('/my-first-level-example',function(){
            echo "Hola primer nivel";
        });
    });




/*Route::get('/my-second-example-laravel-9',function(){
    echo "Hola";
    // return redirect()->route('myindex');
})->name('myindex');


Route::view('/my-routename-example', 'routename');



// http://myblog.com/?id=340
// http://myblog.com/post/como-programar-con-laravel-9

/*Route::get('/post', function(){
    $post = $this->recuperarMiUltimoPost();
    // ...
});

Route::get('/post/{slug}', function($slug){
    $post = $this->recuperarMiPostMedianteSlug($slug);
    // ...
});
*/
// Las dos rutas d earriba se simplifican en la de abajo 
/*
Route::get('/{category}/{slug}/{uuid}', function($category = 'a', $slug = 'post'){
   /* $miCategoria = $this->recuperarMiCategoria($category);
    if ($slug == null){$post = $this->recuperarMiUltimoPost();}
    else{$post = $this->recuperarMiPostMedianteSlug($slug);}
    return $post;*/
   // echo $category. '<br />'. $slug;
// })->whereAlpha('category')->whereAlphaNumeric('slug')->whereUuid('uuid');

/**->where([
    'category'=>'[a-zA-Z0-9]+',
    'slug'=>'[\w-]+'
]); */

// ->where('category','[a-zA-Z0-9]+')->where('slug','[\w-]+');


// Route::get('/my-controller/{id}', [MyFirstController::class, 'myControllerFunction']);


// Route::match(['GET','POST'],'/category/{slug?}/{subslug?}',function($slug = 'laravel-9', $subslug = null){
    // $category = $this->recuperarMiPostMedianteSlug($slug);
    // return $category;
// });

Route::view('/', 'home')->name('home');
Route::get('/contacto', [ MyFirstController::class, 'contactPage' ])->name('contact.form');

Route::middleware('validate')->post('/contacto', [ MyFirstController::class, 'processContact' ])->name('process.contact');
// Route::put('/contacto', [ MyFirstController::class, 'processContactPut' ]);

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
