<?php

use App\Http\Controllers\EquipoController;
use App\Http\Controllers\JugadorController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


// Route::resource('equipos',EquipoController::class);

Route::get('equipo/listar',[EquipoController::class,'index'])->name('equipo.index');
Route::get('equipo/create',[EquipoController::class,'create'])->name('equipo.create');
Route::post('equipo/store',[EquipoController::class,'store'])->name('equipo.store');
Route::get('equipo/{equipo}',[EquipoController::class,'show'])->name('equipo.show');
Route::get('equipo/{equipo}/editar',[EquipoController::class,'edit'])->name('equipo.edit');
Route::put('equipo/{equipo}',[EquipoController::class,'update'])->name('equipo.update');

Route::delete('equipo/{equipo}',[EquipoController::class,'destroy'])->name('equipo.destroy');




Route::get('jugador/listar',[JugadorController::class,'index'])->name('jugador.index');
Route::get('jugador/create',[JugadorController::class,'create'])->name('jugador.create');
Route::post('jugador/store',[JugadorController::class,'store'])->name('jugador.store');
Route::get('jugador/{jugador}',[JugadorController::class,'show'])->name('jugador.show');
Route::get('jugador/{jugador}/editar',[JugadorController::class,'edit'])->name('jugador.edit');
Route::put('jugador/{jugador}',[JugadorController::class,'update'])->name('jugador.update');

Route::delete('jugador/{jugador}',[JugadorController::class,'destroy'])->name('jugador.destroy');