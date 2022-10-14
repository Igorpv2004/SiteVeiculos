<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\listarCarro;
use App\Http\Controllers\CadastrarCaminhaoController;
use App\Http\Controllers\motoController;
use App\Http\Controllers\ControllerCarro2;

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
Route::get('/home',[HomeController::class,'mostrar']);

Route::get('/listarCarro',[listarCarro::class,'lista']);

Route::get('/cadastrarCaminhao',[CadastrarCaminhaoController::class,'MostrarCadastroCaminhao']);

Route::get('/listarMotos',[motoController::class,'mostrar']);

Route::get('/listarCarro2',[ControllerCarro2::class,'mostrar']);