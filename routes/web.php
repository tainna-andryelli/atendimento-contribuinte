<?php

use Illuminate\Support\Facades\Route;

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

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PessoaController;
use App\Http\Controllers\ProtocoloController;
Route::resource('/', HomeController::class);
Route::resource('/protocolo', ProtocoloController::class);
Route::resource('/pessoa', PessoaController::class);
Route::delete('protocolo/{numero}', 'ProtocoloController@destroy');