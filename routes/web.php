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

// -- inicio de mi app
Route::get('/',[ApiController::class,'inicio'])->name('inicio');

// -- Api Rick and Morty
Route::get('/Personaje/{id}',[ApiController::class,'Personaje'])->name('Personaje');
