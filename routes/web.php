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


Route::get('/providerProfile', function () {
    return view('providerProfile.institudeProfile');
});


Route::get('/profile','App\Http\Controllers\ProfileController@index')->name('personalProfile');
Route::get('institude/profile','App\Http\Controllers\ProviderProfileController@index')->name('institudeProfile');
Route::get('consultant/profile','App\Http\Controllers\ProviderProfileController@consultantIndex')->name('consultantProfile');
Route::get('business/profile','App\Http\Controllers\ProviderProfileController@businessIndex')->name('businessProfile');



Route::get('/canadainspair', function () {
    return view('canadainspair');
})->name('canadainspair');

Route::get('/whycanada', function () {
    return view('whycanada');
})->name('whycanada');

Route::get('/personalEdit/{id}', 'App\Http\Controllers\ProfileController@profileEdit')->name('personalEdit');
Route::post('/profilePersonalupdate/{id}', 'App\Http\Controllers\ProfileController@profileUpdate')->name('profilePersonalupdate');

Route::get('/academyEdit/{id}', 'App\Http\Controllers\ProfileController@academyEdit')->name('academyEdit');
Route::post('/profileAcademyupdate/{id}', 'App\Http\Controllers\ProfileController@academyUpdate')->name('profileAcademyupdate');

Route::get('/workEdit/{id}', 'App\Http\Controllers\ProfileController@workEdit')->name('workEdit');
Route::post('/profileWorkupdate/{id}', 'App\Http\Controllers\ProfileController@workUpdate')->name('profileWorkupdate');

Route::get('/sponsorEdit/{id}', 'App\Http\Controllers\ProfileController@sponsoredit')->name('sponsorEdit');
Route::post('/profileSponsorupdate/{id}', 'App\Http\Controllers\ProfileController@sponsorUpdate')->name('profileSponsorupdate');

Route::get('/register/candidate/personal', function () {
    
    return view('register/register');
})->name('candidate_personal');

Route::get('/register/candidate/acadamic', function () {
    return view('register/registerformone');
})->name('candidate_acadamic');

Route::get('dashboard', 'App\Http\Controllers\DashboardController@index')->name('dashboard');
// Route::post('register', 'Register@register')->name('register');


Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');

Route::get('/register/institude', [App\Http\Controllers\InstitutionController::class, 'index'])->name('register.institude');
Route::post('/register/institude', [App\Http\Controllers\InstitutionController::class, 'store'])->name('add.institution');
Route::get('/edit/institude', [App\Http\Controllers\ProviderProfileController::class, 'editInstitude'])->name('edit.institution');
Route::post('/update/institude/{id}', [App\Http\Controllers\ProviderProfileController::class, 'updateInstitude'])->name('update.institution');

Route::get('/register/consultant', [App\Http\Controllers\ConsultantController::class, 'index'])->name('register.consultant');
Route::post('/register/consultant', [App\Http\Controllers\ConsultantController::class, 'store'])->name('add.consultant');
Route::get('/edit/consultant', [App\Http\Controllers\ProviderProfileController::class, 'editConsultant'])->name('edit.consultant');
Route::post('/update/consultant/{id}', [App\Http\Controllers\ProviderProfileController::class, 'updateconsultant'])->name('update.consultant');

Route::get('/register/business', [App\Http\Controllers\ConsultantController::class, 'business'])->name('register.business');
Route::get('/edit/business', [App\Http\Controllers\ProviderProfileController::class, 'editBusiness'])->name('edit.business');


Route::post('/candidate/personal/add', [App\Http\Controllers\CandidatePersonalController::class, 'store'])->name('candidate_personal_add');
Route::post('/candidate/academy/add', [App\Http\Controllers\CandidateAcademyController::class, 'store'])->name('candidate_academy_add');
Route::post('/candidate/work/add', [App\Http\Controllers\CandidateWorkController::class, 'store'])->name('candidate_work_add');
Route::post('/candidate/sponsor/add', [App\Http\Controllers\SponsorController::class, 'store'])->name('candidate_sponsor_add');


Route::get('register/candidate/workexperience', function () {
    return view('register.workexperience');
})->name('candidate_workexperience');

Route::get('register/candidate/sponsor', function () {
    return view('register.sponsor');
})->name('candidate_sponsor');


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Auth::routes();
