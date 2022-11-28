<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\RolesController;
use App\Http\Controllers\TypesController;
use App\Http\Controllers\DatabaseController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\SendingEmailsController;
use App\Http\Controllers\SuplantationController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CampaingController;
use App\Http\Controllers\LocaleController;


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


// Route::get('/', [App\Http\Controllers\SuplantationController::class, 'index']);

Route::middleware('set_locale')->group(function(){

    Route::get('/change-locale/{locale}',[LocaleController::class, 'setLocale'])->name('change-locale');

    Route::get('/', [App\Http\Controllers\HomeController::class, 'locale'])->name('locale');
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Auth::routes();




    Route::get('/', [App\Http\Controllers\SendingEmailsController::class, 'index'])->middleware(['auth' /*'authorization:2'*/])->name('sending-emails');





    Route::get('/example-database', [DatabaseController::class, 'index']);

    // Route::get('/example-home', [HomeController::class, 'index'])->name('home');
    // Route::view('/example-home', 'welcometwo');


    /*Route::redirect('/','/home');

    Route::get('/login',[LoginController::class, 'form'])->name('login');
    Route::post('/login',[LoginController::class, 'login']);
    Route::post('/logout',[LoginController::class, 'logout'])->name('logout');
    */

    Route::prefix('/blog')->name('blog.')->group(function(){
        Route::get('/',[PostsController::class, 'index'])->name('index');
        Route::get('/feed/{format}',[PostsController::class, 'feed'])->name('feed');
    });



    Route::middleware(['authentication'])->group(function(){
    
        Route::get('/login-as-your-user', [SuplantationController::class, 'returnToMyUser'])->name('return-to-user');

        Route::view('/home', 'panel.home')->name('home');

        Route::prefix('/profile')->name('profile.')->group(function(){
            Route::get('/',[ProfileController::class, 'home'])->name('edit');
            Route::put('/',[ProfileController::class, 'save'])->name('save');
        });
        Route::prefix('/users')->name('users.')->middleware(['authorization:2'])->group(function(){
            Route::get('/',[UsersController::class, 'index'])->name('index');
            Route::get('/create',[UsersController::class, 'create'])->name('create');
            Route::get('/edit/{id}',[UsersController::class, 'edit'])->name('edit');

            Route::get('/suplantate/{id}', [App\Http\Controllers\SuplantationController::class, 'index'])->middleware(['authorization:3'])->name('suplantate');

            Route::match(['POST','PUT','PATCH'],'/{id?}',[UsersController::class, 'save'])->name('save');
            Route::delete('/{id}',[UsersController::class, 'delete'])->name('delete');
        });
        Route::prefix('/roles')->name('roles.')->middleware(['authorization:2'])->group(function(){
            Route::get('/',[RolesController::class, 'index'])->name('index');
            Route::middleware(['json_request'])->any('/get',[RolesController::class, 'get'])->name('get');
            Route::get('/create',[RolesController::class, 'create'])->name('create');
            Route::get('/edit/{id}',[RolesController::class, 'edit'])->name('edit');
            Route::match(['POST','PUT','PATCH'],'/{id?}',[RolesController::class, 'save'])->name('save');
            Route::delete('/{id}',[RolesController::class, 'delete'])->name('delete');
        });
        Route::prefix('/types')->name('types.')->middleware(['authorization:1'])->group(function(){
            Route::get('/',[TypesController::class, 'index'])->name('index');
            Route::get('/create',[TypesController::class, 'create'])->name('create');
            Route::get('/edit/{id}',[TypesController::class, 'edit'])->name('edit');
            Route::match(['POST','PUT','PATCH'],'/{id?}',[TypesController::class, 'save'])->name('save');
            Route::delete('/{id}',[TypesController::class, 'delete'])->name('delete');
        });
        Route::prefix('/campaing')->name('campaing.')->middleware(['authorization:2'])->group(function(){
            Route::get('/',[CampaingController::class, 'index'])->name('index');
            Route::get('/create',[CampaingController::class, 'create'])->name('create');
        });
    });
});







/*Route::get('/', function () {
    return view('welcome');
});*/



//Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
