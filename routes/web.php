<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;

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
    return view('feed', ['crimes' => []]);
})->name('feed');


Route::get('/add', function(){
    return view('add');
})->middleware(['auth'])->name('add-crime-page');

Route::get('/my', [ProfileController::class, 'showProfile'])
    ->middleware(['auth'])
    ->name('my');


Route::get('/my/edit/{user}', [ProfileController::class, 'editProfile'])
  ->middleware(['auth', 'rightUser'])
  ->name('my.edit');

Route::patch('/my/edit/{user}', [ProfileController::class, 'updateProfile'])
  ->middleware(['auth', 'rightUser'])
  ->name('my.update');

// Route::get('/messages/{message}', [WallController::class, 'show'])
//     ->middleware(['auth'])
//     ->name('messages.show');
// Route::patch('/messages/{message}', [WallController::class, 'update'])
//     ->middleware(['auth'])
//     ->name('messages.update');

Route::get('/stats', function(){
    return view('stats');
})->name('stat');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

//Route API

Route::controller(ApiController::class)->group(function () {
    Route::post('/custom-api/crime', 'createCrime')->middleware(['auth'])->name('custom-api.add-crime');
    Route::put('/custom-api/crime', 'editCrime')->middleware(['auth'])->name('custom-api.edit-crime');
    Route::delete('/custom-api/crime', 'deleteCrime')->middleware(['auth'])->name('custom-api.delete-crime');
});

require __DIR__.'/auth.php';
