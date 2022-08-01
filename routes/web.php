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

Auth::routes();
Route::get('/', function () {

    return view('index');
});


Route::get('/test', function () {

    return view('test2');
})->name('test2');


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// admin begin

Route::get('/admin/login',  'App\Http\Controllers\UserController@loginPage')->name('adminlogin');;
Route::post('/adminlogin',  'App\Http\Controllers\UserController@login');
Route::post('/adminlogout',  'App\Http\Controllers\UserController@logout')->name('adminlogout');

Route::group(['middleware' => ['is_admin']], function () {

    Route::get('admin/candidate/view', 'App\Http\Controllers\AdminController@candidateIndex')->name('admin.candidate.view');
    Route::get('admin/school/view', 'App\Http\Controllers\AdminController@schoolIndex')->name('admin.school.view');
    Route::get('admin/college/view', 'App\Http\Controllers\AdminController@collegeIndex')->name('admin.college.view');
    Route::get('admin/university/view', 'App\Http\Controllers\AdminController@universityIndex')->name('admin.university.view');
    Route::get('admin/consultant/view', 'App\Http\Controllers\AdminController@consultantIndex')->name('admin.consultant.view');
    Route::get('admin/immigration/view', 'App\Http\Controllers\AdminController@immigrationIndex')->name('admin.immigration.view');
    Route::get('admin/business/view', 'App\Http\Controllers\AdminController@businessIndex')->name('admin.business.view');
    Route::get('admin/consultant/{id}', 'App\Http\Controllers\AdminController@consultantView')->name('consultant.admin.view');
    Route::get('admin/institution/{id}', 'App\Http\Controllers\AdminController@institutionView')->name('institution.admin.view');
    Route::get('admin/business/{id}', 'App\Http\Controllers\AdminController@businessView')->name('business.admin.view');
    Route::get('admin/candidate/{id}', 'App\Http\Controllers\AdminController@candidateProfile')->name('candidate.admin.view');
    Route::get('admin/edu/{id}', 'App\Http\Controllers\AdminController@educationview')->name('edu.admin.view');
    Route::get('admin/crs/{id}', 'App\Http\Controllers\AdminController@calculatorview')->name('crs.admin.view');


    Route::get('admin/index', 'App\Http\Controllers\UserController@adminIndex')->name('admin.index');
    Route::get('/user/create',  'App\Http\Controllers\UserController@create')->name('user.create');
    Route::post('/user/add',  'App\Http\Controllers\UserController@store')->name('user.add');
    Route::get('/user/edit/{id}',  'App\Http\Controllers\UserController@edit')->name('user.edit');
    Route::post('/user/update',  'App\Http\Controllers\UserController@update')->name('user.update');
    Route::get('/user/delete/{id}',  'App\Http\Controllers\UserController@destroy')->name('user.destroy');
    Route::get('/privillage/setup', 'App\Http\Controllers\UserController@privillage')->name('admin.privillage');
    Route::post('/add/privillage', 'App\Http\Controllers\UserController@addPrivillage')->name('add.privillage');

    Route::post('/admin/search/candidate', 'App\Http\Controllers\SearchController@candidateSearch')->name('admin.candidateSearch');
    Route::post('/admin/search', 'App\Http\Controllers\SearchController@providerSearch')->name('admin.providerSearch');
    Route::post('/admin/institude/search', 'App\Http\Controllers\SearchController@institudeSearch')->name('admin.institudeSearch');
    Route::post('/admin/institude/enquiry/search', 'App\Http\Controllers\SearchController@institudeEnquirySearch');
    Route::post('/admin/enquiry/search', 'App\Http\Controllers\SearchController@providerEnquirySearch');
    Route::post('/admin/search/enquiry/candidate', 'App\Http\Controllers\SearchController@candidateEnquirySearch');

    Route::post('/confirmEnquiry', 'App\Http\Controllers\SearchController@confirmEnquiry');
    Route::post('/services/confirmEnquiry', 'App\Http\Controllers\SearchController@servicesConfirmEnquiry');

    Route::get('/admin/candidateEnquiry/{id}', 'App\Http\Controllers\AdminEnquiryController@candidateEnquiry')->name('admin.candidateEnquiry');
    Route::get('/admin/institudeEnquiry/{id}', 'App\Http\Controllers\AdminEnquiryController@institudeEnquiry')->name('admin.institudeEnquiry');
    Route::get('/admin/consultantEnquiry/{id}', 'App\Http\Controllers\AdminEnquiryController@consultantEnquiry')->name('admin.consultantEnquiry');

    Route::get('/admin/enquiry/candidates/list', 'App\Http\Controllers\AdminEnquiryController@candidatesList')->name('admin.enquiry.list.candidates');

    Route::get('/admin/enquiry/school/list', 'App\Http\Controllers\AdminEnquiryController@schoolList')->name('admin.enquiry.list.school');
    Route::get('/admin/enquiry/college/list', 'App\Http\Controllers\AdminEnquiryController@collegeList')->name('admin.enquiry.list.college');
    Route::get('/admin/enquiry/university/list', 'App\Http\Controllers\AdminEnquiryController@universityList')->name('admin.enquiry.list.university');

    Route::get('/admin/enquiry/consultant/list', 'App\Http\Controllers\AdminEnquiryController@consultantList')->name('admin.enquiry.list.consultant');
    Route::get('/admin/enquiry/immigration/list', 'App\Http\Controllers\AdminEnquiryController@immigrationList')->name('admin.enquiry.list.immigration');
    Route::get('/admin/enquiry/business/list', 'App\Http\Controllers\AdminEnquiryController@businessList')->name('admin.enquiry.list.business');

    Route::get('/admin/membership/candidate', 'App\Http\Controllers\MembershipController@membershipCandidate')->name('admin.membership.candidate');
    Route::get('/admin/membership/institution', 'App\Http\Controllers\MembershipController@membershipInstitution')->name('admin.membership.institution');
    Route::get('/admin/membership/provider', 'App\Http\Controllers\MembershipController@membershipProvider')->name('admin.membership.provider');

    Route::post('/admin/candidate/mebership/add', 'App\Http\Controllers\MembershipController@candidateMebershipAdd')->name('admin.candidate.mebership.add');
    Route::post('/admin/institution/mebership/add', 'App\Http\Controllers\MembershipController@institutionMebershipAdd')->name('admin.institution.mebership.add');
    Route::post('/admin/provider/mebership/add', 'App\Http\Controllers\MembershipController@providerMebershipAdd')->name('admin.provider.mebership.add');

    Route::get('/candidate/price', 'App\Http\Controllers\MembershipController@candidatePrice')->name('candidate.price');
    Route::get('/institution/price', 'App\Http\Controllers\MembershipController@institutionPrice')->name('institution.price');
    Route::get('/provider/price', 'App\Http\Controllers\MembershipController@providerPrice')->name('provider.price');

    Route::post('/candidate/price', 'App\Http\Controllers\MembershipController@candidatePriceChange')->name('candidate.price.post');
    Route::post('/institution/price/post', 'App\Http\Controllers\MembershipController@institutionPriceChange')->name('institution.price.post');
    Route::post('/provider/price/post', 'App\Http\Controllers\MembershipController@providerPriceChange')->name('provider.price.post');


    Route::get('/configure', 'App\Http\Controllers\MembershipController@configure')->name('configure');
    Route::post('/currency/change', 'App\Http\Controllers\MembershipController@currencyChange')->name('currency.change');
    Route::post('/date/change', 'App\Http\Controllers\MembershipController@dateChange')->name('date.change');
});

// admin end

Route::group(['middleware' => ['auth']], function () {

    Route::get('/providerProfile', function () {
        return view('providerProfile.institudeProfile');
    });

    Route::get('/indexx', function () {

        return view('indexx');
    })->name('indexx');

    Route::post('/services/confirmEnquiry/user', 'App\Http\Controllers\SearchController@servicesConfirmEnquiryUser');
    Route::post('/services/confirmEnquiry/user/reject', 'App\Http\Controllers\SearchController@servicesConfirmEnquiryUserReject');


    Route::get('/profile', 'App\Http\Controllers\ProfileController@index')->name('personalProfile');
    Route::get('/profile/enquiry/{id}', 'App\Http\Controllers\ProfileController@indexEnquiry')->name('personalProfile.enquiry');


    Route::get('institude/profile', 'App\Http\Controllers\ProviderProfileController@index')->name('institudeProfile');
    Route::get('consultant/profile', 'App\Http\Controllers\ProviderProfileController@consultantIndex')->name('consultantProfile');
    Route::get('business/profile', 'App\Http\Controllers\ProviderProfileController@businessIndex')->name('businessProfile');

    Route::get('canadaInspire', function () {
        return view('other.canadaInspire');
    })->name('canadaInspire');
    Route::get('feedback', 'App\Http\Controllers\OtherController@feedback')->name('feedback');

    Route::post('provider/search', 'App\Http\Controllers\OtherController@providerSearch')->name('providerSearch');
    Route::post('institude/search', 'App\Http\Controllers\OtherController@institudeSearch')->name('institudeSearch');

    // enquires 
    Route::post('/candidate/request', 'App\Http\Controllers\EnquiryController@candidateRequest');
    Route::get('/candidateEnquiry', 'App\Http\Controllers\EnquiryController@candidateEnquiry')->name('candidateEnquiry');
    Route::get('/providerEnquiry/{id}', 'App\Http\Controllers\EnquiryController@providerEnquiry')->name('providerEnquiry');

    Route::get('education', 'App\Http\Controllers\OtherController@educationIndex')->name('education');
    Route::post('add/education', 'App\Http\Controllers\OtherController@educationStore')->name('add.education');
    Route::get('edit/education', 'App\Http\Controllers\OtherController@educationEdit')->name('edit.education');
    Route::post('update/education', 'App\Http\Controllers\OtherController@educationUpdate')->name('update.education');
    Route::get('view/education', 'App\Http\Controllers\OtherController@educationview')->name('view.education');
    Route::get('enquiry/education/{id}', 'App\Http\Controllers\OtherController@educationviewEnquiry')->name('view.education.enquiry');


    Route::get('calculator', 'App\Http\Controllers\OtherController@calculatorIndex')->name('calculator');
    Route::post('add/calculator', 'App\Http\Controllers\OtherController@calculatorStore')->name('add.calculator');
    Route::get('edit/calculator', 'App\Http\Controllers\OtherController@calculatorEdit')->name('edit.calculator');
    Route::post('update/calculator', 'App\Http\Controllers\OtherController@calculatorUpdate')->name('update.calculator');
    Route::get('view/calculator', 'App\Http\Controllers\OtherController@calculatorview')->name('view.calculator');
    Route::get('enquiry/calculator/{id}', 'App\Http\Controllers\OtherController@calculatorviewEnquiry')->name('view.calculator.enquiry');

    Route::get('/personalEdit/{id}', 'App\Http\Controllers\ProfileController@profileEdit')->name('personalEdit');
    Route::post('/profilePersonalupdate/{id}', 'App\Http\Controllers\ProfileController@profileUpdate')->name('profilePersonalupdate');

    Route::get('/academyEdit/{id}', 'App\Http\Controllers\ProfileController@academyEdit')->name('academyEdit');
    Route::get('/academyEdit/delete/file/{id}/{atr}/{model}/', 'App\Http\Controllers\ProfileController@deletefile')->name('deletefile');

    Route::post('/profileAcademyupdate/{id}', 'App\Http\Controllers\ProfileController@academyUpdate')->name('profileAcademyupdate');

    Route::get('/workEdit/{id}', 'App\Http\Controllers\ProfileController@workEdit')->name('workEdit');
    Route::post('/profileWorkupdate/{id}', 'App\Http\Controllers\ProfileController@workUpdate')->name('profileWorkupdate');

    Route::get('/sponsorEdit/{id}', 'App\Http\Controllers\ProfileController@sponsoredit')->name('sponsorEdit');
    Route::post('/profileSponsorupdate/{id}', 'App\Http\Controllers\ProfileController@sponsorUpdate')->name('profileSponsorupdate');




    Route::post('/img/upload/', 'App\Http\Controllers\ProfileController@addImage')->name('ajaxupload.action');

    Route::get('dashboard/consultant', 'App\Http\Controllers\DashboardController@consultantIndex')->name('dashboard.consultant');
    Route::get('dashboard/consultant/{id}', 'App\Http\Controllers\DashboardController@consultantView')->name('dashboard.consultant.view');

    Route::get('dashboard/institution', 'App\Http\Controllers\DashboardController@institudeIndex')->name('dashboard.institution');
    Route::get('dashboard/institution/{id}', 'App\Http\Controllers\DashboardController@institutionView')->name('dashboard.institution.view');

    Route::get('dashboard/business', 'App\Http\Controllers\DashboardController@businessIndex')->name('dashboard.business');
    Route::get('dashboard/business/{id}', 'App\Http\Controllers\DashboardController@businessView')->name('dashboard.business.view');

    Route::get('dashboard/view/school', 'App\Http\Controllers\DashboardController@schoolIndex')->name('dashboard.view.school');
    Route::get('dashboard/view/university', 'App\Http\Controllers\DashboardController@universityIndex')->name('dashboard.view.university');
    Route::get('dashboard/view/college', 'App\Http\Controllers\DashboardController@collegeIndex')->name('dashboard.view.college');
    Route::get('dashboard/view/immigration', 'App\Http\Controllers\DashboardController@immigrationIndex')->name('dashboard.view.immigration');
    Route::get('dashboard/view/consultant', 'App\Http\Controllers\DashboardController@rcicConsultantIndex')->name('dashboard.view.consultant');



    // Route::post('register', 'Register@register')->name('register');


    Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');

    Route::get('/register/institude', [App\Http\Controllers\InstitutionController::class, 'index'])->name('register.institude');
    Route::get('/school/terms', [App\Http\Controllers\InstitutionController::class, 'registerterm'])->name('register.term');

    
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

    Route::get('/register/candidate/personal', [App\Http\Controllers\CandidatePersonalController::class, 'index'])->name('candidate_personal');

    Route::get('/membership', [App\Http\Controllers\HomeController::class, 'membership'])->name('membership');
    Route::get('/membership/add', [App\Http\Controllers\HomeController::class, 'membershipAdd'])->name('add.membership');
    Route::post('/membership/add', [App\Http\Controllers\HomeController::class, 'membershipStore'])->name('membership.add');
    Route::post('/extend/add', [App\Http\Controllers\HomeController::class, 'extendService'])->name('service.add');
    Route::post('/package/add', [App\Http\Controllers\HomeController::class, 'packageAdd'])->name('package.add');


    Route::get('/membership/institude', [App\Http\Controllers\HomeController::class, 'membershipInstitude'])->name('membership.institude');
    Route::get('/membership/add/institude', [App\Http\Controllers\HomeController::class, 'membershipAddInstitude'])->name('add.membership.institude');
    Route::post('/membership/add/institude', [App\Http\Controllers\HomeController::class, 'membershipStoreInstitude'])->name('membership.add.institude');
    Route::post('/package/add/institude', [App\Http\Controllers\HomeController::class, 'packageAddInstitude'])->name('package.add.institude');

    Route::get('/membership/provider', [App\Http\Controllers\HomeController::class, 'membershipProvider'])->name('membership.provider');
    Route::get('/membership/add/provider', [App\Http\Controllers\HomeController::class, 'membershipAddProvider'])->name('add.membership.provider');
    Route::post('/membership/add/provider', [App\Http\Controllers\HomeController::class, 'membershipStoreProvider'])->name('membership.add.provider');
    Route::post('/package/add/provider', [App\Http\Controllers\HomeController::class, 'packageAddProvider'])->name('package.add.provider');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
