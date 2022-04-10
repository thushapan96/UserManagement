<?php

use Illuminate\Support\Facades\Route;
use HTTP\Controllers;

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
    return view('index');
});

Route::get('/canadainspair' , function(){
return view('canadainspair');
})->name('canadainspair');

Route::get('/whycanada' , function(){
    return view('whycanada');
    })->name('whycanada');

    Route::get('/register/step1' , function(){
        return view('register');
        })->name('register2');

        Route::get('/register/step2' , function(){
            return view('registerformone');
            })->name('register2');

Route::get('register', 'UserController@register')->name('register');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
