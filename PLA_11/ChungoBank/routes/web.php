<?php

use App\Http\Controllers\AltaMovimientooController;
use App\Http\Controllers\AltaMtoController;
use App\Http\Controllers\AltaPersonaController;
use App\Http\Controllers\ConsultaController;
use App\Http\Controllers\DetalleController;
use App\Http\Controllers\GestionController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SaludarController;

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
Route::get('/',[GestionController::class,'index']);
Route::get('/hola',[SaludarController::class,'index2']);
Route::get('/gestion',[GestionController::class,'gestion']);
Route::get('/detalle-movimiento',[DetalleController::class,'detalle']);
Route::get('/consulta-movimientos',[ConsultaController::class,'consulta']);
Route::get('/alta-personas',[AltaPersonaController::class,'altaPersona']);
Route::get('/alta-movimientos',[AltaMovimientooController::class,'altaMovimientos']);
Route::get('/alta-mto-puntos',[AltaMtoController::class,'altaMto']);

