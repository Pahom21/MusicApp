<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaymentController;


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

Route::get('/', function(){
    return view('welcome');
});

Route::get('/basic-subscription', function (){
   return view('basic');
})->name('basic-subscription');

Route::get('/premium-subscription', function (){
    return view('premium');
 })->name('premium-subscription');

 //Route::get('/pay',[PaymentController::class, 'stk']);

 Route::post('/pay-stk', [PaymentController::class, 'stk'])->name('pay-stk');





 
