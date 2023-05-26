<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PermitLetterController;
use App\Http\Controllers\SubmitLetterController;
use App\Http\Controllers\ClassController;


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
    return view('welcome');
}); 

// Route::get('/input',[PermitLetterController::class, 'index']);
// Route::post('/permitletter',[PermitLetterController::class, 'store'])->name('permitletter');

Route::resource('submit',SubmitLetterController::class);

Route::resource('permit',PermitLetterController::class);

Route::get('incoming',[PermitLetterController::class, 'update'])->middleware('must-admin-or-teacher');

Route::resource('class',ClassController::class);

Route::view('/signin','signin');
Route::view('/login','login');
Route::view('/history','history');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
