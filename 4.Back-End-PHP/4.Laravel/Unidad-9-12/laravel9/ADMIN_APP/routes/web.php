<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\RolesController;
use App\Http\Controllers\TypesController;

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

Route::redirect('/','/home');

Route::get('/login',[LoginController::class, 'form'])->name('login');
Route::post('/login',[LoginController::class, 'login']);
Route::post('/logout',[LoginController::class, 'logout'])->name('logout');

Route::middleware(['authentication'])->group(function(){
    Route::get('/home', [HomeController::class, 'index'])/*function(){
        return response("");
    })*/->name('home');
    Route::prefix('/users')->name('users.')->group(function(){
        Route::get('/',[UsersController::class, 'index'])->name('index');
        Route::get('/create',[UsersController::class, 'create'])->name('create');
        Route::get('/edit/{id}',[UsersController::class, 'edit'])->name('edit');
        Route::match(['POST','PUT','PATCH'],'/{id?}',[UsersController::class, 'save'])->name('save');
        Route::delete('/{id}',[UsersController::class, 'delete'])->name('delete');
    });
    Route::prefix('/roles')->name('roles.')->group(function(){
        Route::get('/',[RolesController::class, 'index'])->name('index');
        Route::middleware(['json_request'])->any('/get',[RolesController::class, 'get'])->name('get');
        Route::get('/create',[RolesController::class, 'create'])->name('create');
        Route::get('/edit/{id}',[RolesController::class, 'edit'])->name('edit');
        Route::match(['POST','PUT','PATCH'],'/{id?}',[RolesController::class, 'save'])->name('save');
        Route::delete('/{id}',[RolesController::class, 'delete'])->name('delete');
    });
    Route::prefix('/types')->name('types.')->group(function(){
        Route::get('/',[TypesController::class, 'index'])->name('index');
        Route::get('/create',[TypesController::class, 'create'])->name('create');
        Route::get('/edit/{id}',[TypesController::class, 'edit'])->name('edit');
        Route::match(['POST','PUT','PATCH'],'/{id?}',[TypesController::class, 'save'])->name('save');
        Route::delete('/{id}',[TypesController::class, 'delete'])->name('delete');
    });
});







/*Route::get('/', function () {
    return view('welcome');
});*/
