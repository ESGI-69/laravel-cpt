<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;
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

Route::get('/', function () {
    // return view('feed', ['crimes' => []]);
    $crimes = Crime::paginate(25); //On montre les 25 permiers crimes
    return view('feed', compact('crimes'));
})->name('feed');


Route::get('/add', function(){
    return view('add');
})->middleware(['auth'])->name('add-crime-page');

Route::get('/my', function(){
    return view('profile');
})->middleware(['auth'])->name('my');

// Edit du profile pour plus tard (pas primordiale)
Route::get('/my/edit', function(){
    return view('profile');
})->middleware(['auth'])->name('edit-profile');



Route::get('/stats', function(){
    return view('stats');
})->name('stat');

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

//Route API

Route::controller(ApiController::class)->group(function () {
    Route::post('/custom-api/crime', 'createCrime')->middleware(['auth'])->name('custom-api.add-crime');
    Route::put('/custom-api/crime', 'editCrime')->middleware(['auth'])->name('custom-api.edit-crime');
    Route::delete('/custom-api/crime', 'deleteCrime')->middleware(['auth'])->name('custom-api.delete-crime');
});

require __DIR__.'/auth.php';
