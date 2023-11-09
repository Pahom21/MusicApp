<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TrackController;
use App\Http\Controllers\PlaylistController;

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
    return view('homepage');
});

Route::get('/tracks', [TrackController::class, 'index'])->name('tracks');

Route::prefix('track')->group(function () {
    Route::post('/add', [TrackController::class, 'create'])->name('track.add');
    Route::post('/details', [TrackController::class, 'get_track'])->name('track.details');
    Route::post('/update', [TrackController::class, 'update'])->name('track.update');
    Route::post('/playlist/add', [TrackController::class, 'add_to_playlist'])->name('track.playlist.add');
    Route::post('/playlist/remove', [TrackController::class, 'remove_from_playlist'])->name('track.playlist.remove');
    Route::post('/delete', [TrackController::class, 'delete_tracks'])->name('track.delete');
});

Route::get('/playlists', [PlaylistController::class, 'index'])->name('playlists');

Route::prefix('playlist')->group(function () {
    Route::post('/add', [PlaylistController::class, 'create'])->name('playlist.add');
    Route::post('/details', [PlaylistController::class, 'get_playlist'])->name('playlist.details');
    Route::post('/update', [PlaylistController::class, 'update'])->name('playlist.update');
    Route::get('/view/{id}/{random}', [PlaylistController::class, 'view'])->name('playlist.view');
    Route::post('/delete', [PlaylistController::class, 'delete_playlists'])->name('playlist.delete');
});
