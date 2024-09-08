<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArmaPartidoController;
use App\Http\Controllers\ContactoController;
use App\Http\Controllers\EquipoController;
use App\Http\Controllers\PersonaController;
use App\Http\Controllers\EquipoPartidoController;
use App\Http\Controllers\HDeportivoController;
use App\Http\Controllers\JugadorController;
use App\Http\Controllers\PartidoJugadorController;
use App\Http\Controllers\PFisicaController;
use App\Http\Controllers\PGrupoController;
use App\Http\Controllers\PPsicologicaController;
use App\Http\Controllers\PTecnicaController;
use App\Http\Controllers\ResultadoPartidoController;
use App\Http\Controllers\RolJugadorController;
use App\Http\Controllers\RPruebaController;
use App\Http\Controllers\TipoPartidoController;
use App\Http\Controllers\TLegalController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::controller(ArmaPartidoController::class)->group(function(){
    Route::get('/ArmaPartido/datos','getData');
    Route::post('/ArmaPartido/guardar','save');
    Route::put('/ArmaPartido/actualizar','update');
    Route::delete('/ArmaPartido/eliminar','delete');
});

Route::controller(ContactoController::class)->group(function(){
    Route::get('/contacto/datos','getData');
    Route::post('/contacto/guardar','save');
    Route::put('/contacto/actualizar','update');
    Route::delete('/contacto/eliminar','delete');
});

Route::controller(EquipoController::class)->group(function(){
    Route::get('/equipo/datos','getData');
    Route::post('/equipo/guardar','save');
    Route::put('/equipo/actualizar','update');
    Route::delete('/equipo/eliminar','delete');
});

Route::controller(PersonaController::class)->group(function(){
    Route::get('/persona/datos','getData');
    Route::post('/persona/guardar','save');
    Route::put('/persona/actualizar','update');
    Route::delete('/persona/eliminar','delete');
});

Route::controller(EquipoPartidoController::class)->group(function(){
    Route::get('/equipopartido/datos','getData');
    Route::post('/equipopartido/guardar','save');
    Route::put('/equipopartido/actualizar','update');
    Route::delete('/equipopartido/eliminar','delete');
});

Route::controller(HDeportivoController::class)->group(function(){
    Route::get('/hdep/datos','getData');
    Route::post('/hdep/guardar','save');
    Route::put('/hdep/actualizar','update');
    Route::delete('/hdep/eliminar','delete');
});

Route::controller(JugadorController::class)->group(function(){
    Route::get('/jugador/datos','getData');
    Route::post('/jugador/guardar','save');
    Route::put('/jugador/actualizar','update');
    Route::delete('/jugador/eliminar','delete');
});

Route::controller(PartidoJugadorController::class)->group(function(){
    Route::get('/partidojugador/datos','getData');
    Route::post('/partidojugador/guardar','save');
    Route::put('/partidojugador/actualizar','update');
    Route::delete('/partidojugador/eliminar','delete');
});

Route::controller(PFisicaController::class)->group(function(){
    Route::get('/pfisica/datos','getData');
    Route::post('/pfisica/guardar','save');
    Route::put('/pfisica/actualizar','update');
    Route::delete('/pfisica/eliminar','delete');
});

Route::controller(PGrupoController::class)->group(function(){
    Route::get('/pgrupo/datos','getData');
    Route::post('/pgrupo/guardar','save');
    Route::put('/pgrupo/actualizar','update');
    Route::delete('/pgrupo/eliminar','delete');
});

Route::controller(PPsicologicaController::class)->group(function(){
    Route::get('/psicologica/datos','getData');
    Route::post('/psicologica/guardar','save');
    Route::put('/psicologica/actualizar','update');
    Route::delete('/psicologica/eliminar','delete');
});

Route::controller(PTecnicaController::class)->group(function(){
    Route::get('/ptecnica/datos','getData');
    Route::post('/ptecnica/guardar','save');
    Route::put('/ptecnica/actualizar','update');
    Route::delete('/ptecnica/eliminar','delete');
});

Route::controller(ResultadoPartidoController::class)->group(function(){
    Route::get('/resultadopartido/datos','getData');
    Route::post('/resultadopartido/guardar','save');
    Route::put('/resultadopartido/actualizar','update');
    Route::delete('/resultadopartido/eliminar','delete');
});

Route::controller(RolJugadorController::class)->group(function(){
    Route::get('/roljugador/datos','getData');
    Route::post('/roljugador/guardar','save');
    Route::put('/roljugador/actualizar','update');
    Route::delete('/roljugador/eliminar','delete');
});

Route::controller(RPruebaController::class)->group(function(){
    Route::get('/rprueba/datos','getData');
    Route::post('/rprueba/guardar','save');
    Route::put('/rprueba/actualizar','update');
    Route::delete('/rprueba/eliminar','delete');
});

Route::controller(TipoPartidoController::class)->group(function(){
    Route::get('/tipopartido/datos','getData');
    Route::post('/tipopartido/guardar','save');
    Route::put('/tipopartido/actualizar','update');
    Route::delete('/tipopartido/eliminar','delete');
});

Route::controller(TLegalController::class)->group(function(){
    Route::get('/tlegal/datos','getData');
    Route::post('/tlegal/guardar','save');
    Route::put('/tlegal/actualizar','update');
    Route::delete('/tlegal/eliminar','delete');
});




