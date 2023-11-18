<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PlaylistController;
use App\Models\Playlist;


Route::get('/', function () {
    return view('homepage');
});

Route::get('/playlists', [PlaylistController::class, 'index'])->name('playlists');
Route::get('/playlists/add', [PlaylistController::class, 'create'])->name('playlists.create'); // Route for displaying the create playlist form
Route::post('/playlists/store', [PlaylistController::class, 'store'])->name('playlists.store'); // Route for storing the new playlist

Route::prefix('playlist')->group(function () {
    Route::post('/update', [PlaylistController::class, 'update'])->name('playlist.update');
    Route::get('/view/{id}/{random}', [PlaylistController::class, 'view'])->name('playlist.view');
    Route::post('/delete', [PlaylistController::class, 'delete_playlists'])->name('playlist.delete');
});

?>