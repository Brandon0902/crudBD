<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JugadorController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/jugadores', [JugadorController::class, 'index'])->name('jugadores.index');
Route::get('/jugadores/create', [JugadorController::class, 'create'])->name('jugadores.create');
Route::post('/jugadores', [JugadorController::class, 'store'])->name('jugadores.store');
Route::get('/jugadores/{jugador}', [JugadorController::class, 'show'])->name('jugadores.show');
Route::get('/jugadores/{jugador}/edit', [JugadorController::class, 'edit'])->name('jugadores.edit');
Route::put('/jugadores/{jugador}', [JugadorController::class, 'update'])->name('jugadores.update');
Route::delete('/jugadores/{jugador}', [JugadorController::class, 'destroy'])->name('jugadores.destroy');
