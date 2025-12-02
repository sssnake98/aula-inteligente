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

// Ruta principal (página de inicio)
Route::get('/', function () {
    return view('welcome');
})->name('welcome');

// Página principal (dashboard)
Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

// Rutas CRUD
Route::resource('aulas', \App\Http\Controllers\AulaController::class);
Route::resource('materias', \App\Http\Controllers\MateriaController::class);
Route::resource('docentes', \App\Http\Controllers\DocenteController::class);
Route::resource('reservas', \App\Http\Controllers\ReservaController::class);
Route::resource('disponibilidades', \App\Http\Controllers\DisponibilidadController::class);
Route::resource('muebles', \App\Http\Controllers\MuebleController::class);
Route::resource('aires', \App\Http\Controllers\AireAcondicionadoController::class);
Route::resource('focos', \App\Http\Controllers\FocoController::class);
Route::resource('cortinas', \App\Http\Controllers\CortinaController::class);