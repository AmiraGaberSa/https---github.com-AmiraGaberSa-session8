<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\GuardController;
use App\Http\Controllers\ContactController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
    ], function(){
//Routs for home section
Route::get('testhome',[HomeController::class,'index'])->name('testhome');

//Routs for about section
Route::get('about',[AboutController::class,'index'])->name('about');

//Routs for service section
Route::get('service',[ServiceController::class,'index'])->name('service');

//Routs for guard section
Route::get('guard',[GuardController::class,'index'])->name('guard');

//Routs for contactUs section
Route::get('contactUs',[ContactController::class,'index'])->name('contactUs');
   
});






Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('testhome');
