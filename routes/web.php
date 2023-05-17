<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PermitLetterController;


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

Route::get('/input',[PermitLetterController::class, 'store'])->name('permitletter');

Route::view('/signin','signin');
Route::view('/login','login');
Route::view('/history','history');

