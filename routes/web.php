<?php

use App\Http\Controllers\MayoristasController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [MayoristasController::class, 'index']);

Route::resource('mayoristas', App\Http\Controllers\MayoristasController::class);
Route::resource('codigos', App\Http\Controllers\CodigosController::class);
