<?php

use Illuminate\Support\Facades\Route;
use HTTP\Controllers;
use Illuminate\Support\Facades\Auth;

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

Route::get('/canadainspair', function () {
    return view('canadainspair');
})->name('canadainspair');

Route::get('/whycanada', function () {
    return view('whycanada');
})->name('whycanada');

Route::get('/register/candidate/personal', function () {
    return view('register/register');
})->name('candidate_personal');

Route::get('/register/candidate/acadamic', function () {
    return view('register/registerformone');
})->name('candidate_acadamic');

Route::get('register', 'UserController@register')->name('register');

Route::get('register/institude', function () {
 return view('register.institude');
})->name('register.institude');

Route::get('/register/institude', [App\Http\Controllers\InstitutionController::class, 'index'])->name('register.institude');
Route::post('/register/institude', [App\Http\Controllers\InstitutionController::class, 'store'])->name('add.institution');



Route::get('register/consultant', function () {
    return view('register.consultant');
});

Route::get('register/business', function () {
    return view('register.business');
});

Route::get('register/candidate/workexperience', function () {
    return view('register.workexperience');
})->name('candidate_workexperience');

Route::get('register/candidate/sponsor', function () {
    return view('register.sponsor');
})->name('candidate_sponsor');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
