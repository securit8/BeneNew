<?php

use Illuminate\Supoort\Facades\App;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LocalizationController;
use App\Http\Controllers\RoutesController;
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

Route::get('/', [RoutesController::class, 'index'])->name('frontend.home');
Route::get('/about', [RoutesController::class, 'about'])->name('frontend.about');
Route::get('/fleet', [RoutesController::class, 'fleet'])->name('frontend.fleet');
Route::get('/rent', [RoutesController::class, 'rent'])->name('frontend.rent');
Route::get('/academy', [RoutesController::class, 'academy'])->name('frontend.academy');
Route::get('/taxi', [RoutesController::class, 'taxi'])->name('frontend.taxi');
Route::get('/partners', [RoutesController::class, 'partners'])->name('frontend.partners');
Route::get('/motors', [RoutesController::class, 'motors'])->name('frontend.motors');
Route::get('/contact', [RoutesController::class, 'contact'])->name('frontend.contact');




Route::get('/S-class', function() {
  return view('frontend.S-class');
});

Route::get('/sprinter', function() {
  return view('frontend.sprinter');
});

Route::get('/camry', function() {
  return view('frontend.camry');
});

Route::get('/temsa', function() {
  return view('frontend.temsa');
});

Route::get('/tourismo', function() {
  return view('frontend.tourismo');
});

Route::get('/tesla', function() {
  return view('frontend.tesla');
});

Route::get('/e-class', function() {
  return view('frontend.e-class');
});

Route::get('/viano', function() {
  return view('frontend.viano');
});

Route::get('/land', function() {
  return view('frontend.land');
});

Route::get('/w222', function() {
  return view('frontend.w222');
});



// Localization Route

Route::get("locale/{lange}", [LocalizationController::class, 'setLang']);
