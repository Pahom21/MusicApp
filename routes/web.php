<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\MusicController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\AnalysisController;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaymentController;

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
})->name('home');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/email/verify',function(){
    return view('auth.verify-email');
} )->middleware('auth')->name('verification.notice');

Route::get('/email/verify/{id}/{hash}',function(EmailVerificationRequest $request){
    $request ->fulfill();
    Return redirect('/profile');
} )->middleware('auth','signed')->name('verification.verify');

Route::post('/email/verification-notification',function(Request $request){
    $request ->user()->sendEmailVerificationNotification();
    return back()->with('message','Verification Link Sent!');
} )->middleware('auth','throttle:6,1')->name('verification.send');

require __DIR__.'/auth.php';

Route::middleware(['auth','role:Admin'])->group(function () {
Route::get('/admin/dashboard',[AdminController::class,'AdminDashboard'])->name('admin.dashboard');
Route::get('/music',[AdminController::class,'music'])->name('music.dashboard');
Route::get('/createmusic',[AdminController::class,'musiccreate'])->name('music.create');
//POST & PUT
Route::post('/createmusic',[MusicController::class,'musicupload'])->name('music.upload');
Route::get('/{id}/edit',[MusicController::class,'musicedit'])->name('music.edit');
Route::put('/edit/{songId}',[MusicController::class,'musicupdate']) ->name('music.update');
Route::delete('/delete/{songId}', [MusicController::class, 'musicdelete'])->name('music.delete');
Route::get('/logout', [LogoutController::class, 'logout'])->name('admin.logout');


//Analysis Routes
Route::get('/admin/analytics', [AnalysisController::class,'index'])->name('admin.analytics')
;

//INVOICE CONTROLLERS
Route::get('/invoicing', [InvoiceController::class,'invoice'])->name('invoice.dash');
Route::get('/invoice/pdf', [InvoiceController::class, 'InvoicesPDF'])->name('invoice.pdf');
Route::get('/invoice/create', [InvoiceController::class,'create'])->name('invoice.create');
Route::post('/invoice/create', [InvoiceController::class,'store'])->name('invoice.upload');
Route::get('/invoice/{invoicesId}/edit', [InvoiceController::class,'edit']) ->name('invoice.edit');
Route::put('/invoice/edit/{invoicesId}', [InvoiceController::class,'update']) ->name('invoice.update');
Route::delete('/invoice/delete/{invoicesId}', [InvoiceController::class,'delete']) ->name('invoice.delete');
});// End group middleware






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





 
