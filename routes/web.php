<?php

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

//Route API

Route::post('/api/crime', [ApiController::class, 'createCrime'])->middleware(['auth'])->name('api.add-crime');

Route::patch('/api/crime/{id}', function(){

})->middleware(['auth'])->name('api.edit-crime');

Route::delete('/api/crime/{id}',function(){

})->middleware(['auth'])->name('api.delete-crime');

require __DIR__.'/auth.php';
