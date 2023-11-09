<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LibraryController;

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

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
// routes/web.php


Route::get('/my-library', 'LibraryController@index')->name('my-library');


Route::prefix('playlist')->group(function() {

    Route::post('/add', 'LibraryController@create')->name('playlist.add');
    Route::post('/details', 'LibraryController@get_playlist')->name('playlist.details');
    Route::post('/update', 'LibraryController@update')->name('playlist.update');
    Route::get('/view/{id}/{random}', 'LibraryController@view')->name('playlist.view');
    Route::post('/delete', 'LibraryController@delete_playlists')->name('playlist.delete');

}); // Added closing parenthesis


