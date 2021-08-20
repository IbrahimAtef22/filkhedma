<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HospitalController;
use App\Http\Controllers\PharmacyController;
use App\Http\Controllers\PostofficeController;
use App\Http\Controllers\CivilregistryController;
use App\Http\Controllers\CityController;
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
Route::get('/main', function () {
    return view('main');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/hospitalall', function () {
    return view('hospitalall');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('auth');

Route::resource("/hospitals", HospitalController::class)->middleware('auth');

Route::resource("/pharmacies",PharmacyController::class)->middleware('auth');

Route::resource("/postoffices",PostofficeController::class)->middleware('auth');

Route::resource("/civilregistry",CivilregistryController::class)->middleware('auth');

Route::resource("/cities",CityController::class)->middleware('auth');

Route::get('/service-list',[PharmacyController::class,'getServices'])->name('Search');

Route::get('/get-pharmacy/{pharmacy}',[PharmacyController::class,'getPharmacy'])->name('getpharmacy');
Route::get('/get-postoffice/{postoffice}',[PostofficeController::class,'getPostoffice'])->name('getpostoffice');
Route::get('/get-civilregistry/{civilregistry}',[CivilregistryController::class,'getcivilregistry'])->name('getcivilregistry');
Route::get('/get-hospital/{hospital}',[HospitalController::class,'getHospital'])->name('gethospital');

//Route::get('/postoffice-list',[PostofficeController::class,'getPostoffices'])->name('filter');
Route::get('hospitalall',[HospitalController::class,'showall']);
Route::get('pharmacyall',[PharmacyController::class,'showall']);
Route::get('civilregistryall',[CivilregistryController::class,'showall']);
Route::get('postofficeall',[PostofficeController::class,'showall']);

Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
    ], function(){ 
        Route::get('create','LangController@create');
    });