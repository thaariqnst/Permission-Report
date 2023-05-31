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
    return view('home');
}); 

Route::resource('permit',PermitLetterController::class)->middleware('auth');
Route::resource('incoming',PermitLetterController::class)->middleware('must-admin-or-teacher');
Route::put('/accept/{id}',[PermitLetterController::class, 'accept'] )->name('letters.accept');



Route::resource('class',ClassController::class);

Route::view('/signin','signin');
Route::view('/login','login');
Route::view('/history','history');


Auth::routes();

Route::get('/home', [PermitLetterController::class, 'index'])->name('home')->middleware('auth');
Route::get('/', [PermitLetterController::class, 'index'])->name('home')->middleware('auth');
