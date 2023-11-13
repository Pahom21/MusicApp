<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\MusicController;
use App\Http\Controllers\LogoutController;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::post('/createmusic',[MusicController::class,'musicupload'])->name('music.upload');

Route::get('/{id}/edit',[MusicController::class,'musicedit'])->name('music.edit');
Route::put('/edit/{songId}',[MusicController::class,'musicupdate']) ->name('music.update');

Route::delete('/delete/{songId}', [MusicController::class, 'musicdelete'])->name('music.delete');

Route::get('/logout', [LogoutController::class, 'logout'])->name('admin.logout');

});// End group middleware


