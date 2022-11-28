<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

/*
    N0qZXY9r8F-hapTczSdD6
    RfXm2DL1wC-Eq1JbGD2Pn
    YlQRMLeWbi-tUX0qkkafF
    Yu0eSJhJNe-nT0QqOOYQN
    rFpgB9Hyam-o52xzsyvH2
    XIyTlW7YHO-3LoTnIgWRT
    3YnOeEjJby-Sm1GTzPbDP
    wCQQUbQPjf-vPxwPVPL6d
 */
