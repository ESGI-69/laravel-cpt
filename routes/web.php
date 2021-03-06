<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;
use App\Http\Controllers\CrimeController;
use App\Http\Controllers\WeaponController;
use App\Http\Controllers\StatController;
use App\Models\Crime;

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

Route::get('/', [CrimeController::class, 'displayCrimes'])->name('feed');

Route::get('/add', [CrimeController::class, 'addCrime'])
->middleware(['auth'])
->name('add-crime-page');

Route::get('/add-weapon', [WeaponController::class, 'addWeapon'])
->middleware(['auth'])
->name('add-weapon');

Route::get('/my', [ProfileController::class, 'showProfile'])
    ->middleware(['auth'])
    ->name('my');

Route::get('/edit/{id}', [CrimeController::class, 'editCrime'])
->middleware(['auth'])
->name('edit-crime-page');

Route::get('/my/edit/{user}', [ProfileController::class, 'editProfile'])
  ->middleware(['auth', 'rightUser'])
  ->name('my.edit');

Route::patch('/my/edit/{user}', [ProfileController::class, 'updateProfile'])
  ->middleware(['auth', 'rightUser'])
  ->name('my.update');

Route::get('/stats', [StatController::class, 'displayStat'] )
-> middleware(['auth'])
->name('stat');

//Route API

Route::controller(ApiController::class)->group(function () {
    Route::post('/custom-api/crime', 'createCrime')->middleware(['auth'])->name('custom-api.add-crime');
    Route::put('/custom-api/crime', 'editCrime')->middleware(['auth'])->name('custom-api.edit-crime');
    Route::delete('/custom-api/crime', 'deleteCrime')->middleware(['auth'])->name('custom-api.delete-crime');
    Route::post('/custom-api/weapon', 'createWeapon')->middleware(['auth'])->name('custom-api.add-weapon');
    Route::post('/custom-api/wtype', 'createWtype')->middleware(['auth'])->name('custom-api.add-wtype');
});

require __DIR__.'/auth.php';
