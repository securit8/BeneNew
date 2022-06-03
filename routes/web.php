<?php

use Illuminate\Supoort\Facades\App;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LocalizationController;
use App\Http\Controllers\RoutesController;
use App\Http\Controllers\SendEmailController; 
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
Route::get('/news', [RoutesController::class, 'news'])->name('frontend.news');
Route::get('/fleet', [RoutesController::class, 'fleet'])->name('frontend.fleet');
Route::get('/car-rent', [RoutesController::class, 'rent'])->name('frontend.car-rent');
Route::get('/academy', [RoutesController::class, 'academy'])->name('frontend.academy');
Route::get('/taxi', [RoutesController::class, 'taxi'])->name('frontend.taxi');
Route::get('/partners', [RoutesController::class, 'partners'])->name('frontend.partners');
Route::get('/motors', [RoutesController::class, 'motors'])->name('frontend.motors');
Route::get('/contact', [RoutesController::class, 'contact'])->name('frontend.contact');
Route::get('/electric', [RoutesController::class, 'electric'])->name('frontend.electric');
Route::get('/events', [RoutesController::class, 'events'])->name('frontend.events');
Route::get('/events/LImperatrice', [RoutesController::class, 'blacksea'])->name('frontend.blacksea');


Route::get('/article1', [RoutesController::class, 'article1'])->name('frontend.news-article1');



Route::get('/S-class', [RoutesController::class, 'Sclass'])->name('frontend.S-class');
Route::get('/S-class2019', [RoutesController::class, 'Sclass2019'])->name('frontend.S-class2019');
Route::get('/v-class', [RoutesController::class, 'vclass'])->name('frontend.v-class');
Route::get('/sptinter', [RoutesController::class, 'sprinter'])->name('frontend.sprinter');
Route::get('/camry', [RoutesController::class, 'camry'])->name('frontend.camry');
Route::get('/tesla', [RoutesController::class, 'tesla'])->name('frontend.tesla');
Route::get('/tourismo', [RoutesController::class, 'tourismo'])->name('frontend.tourismo');
Route::get('/temsa', [RoutesController::class, 'temsa'])->name('frontend.temsa');
Route::get('/e-class', [RoutesController::class, 'eclass'])->name('frontend.e-class');
Route::get('/land', [RoutesController::class, 'land'])->name('frontend.land');
Route::get('/land200', [RoutesController::class, 'land200'])->name('frontend.land200');
Route::get('/prado', [RoutesController::class, 'prado'])->name('frontend.prado');
Route::get('/rav4', [RoutesController::class, 'rav4'])->name('frontend.rav4');

Route::get('/event-moiare', [RoutesController::class, 'moiare'])->name('frontend.event-moiare');
Route::get('/networking', [RoutesController::class, 'networking'])->name('frontend.networking');
Route::get('/distribution', [RoutesController::class, 'distribution'])->name('frontend.distribution');
Route::get('/week', [RoutesController::class, 'week'])->name('frontend.week');
Route::get('/mercedes-event', [RoutesController::class, 'event'])->name('frontend.mercedes-event');


Route::get('/brands', [RoutesController::class, 'brands'])->name('frontend.brands');


Route::post('/send-email', [SendEmailController::class, 'index'])->name('send_email');




Route::get('/w222', function() {
  return view('frontend.w222');
});



// Localization Route

Route::get("locale/{lange}", [LocalizationController::class, 'setLang']);
