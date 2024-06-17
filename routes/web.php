<?php

use App\Http\Controllers\QuartosController;
use Database\Factories\QuartosFactory;
use Illuminate\Support\Facades\Route;


/* QUARTOS */
Route::get('/teste', [QuartosController::class, 'index']); // ('/') caminho depois do class nome da funcao index

// All listing
Route::get('quartos', [QuartosController::class, 'quartos']); // ('/quartos') caminho depois do class nome da funcao quartos

// Single Listing
Route::get('/quarto-{quarto}', [QuartosController::class, 'show']); // Define the route with a parameter

Route::get('reserva', [QuartosController::class, 'create']); // ('/quartos') caminho depois do class nome da funcao quartos

Route::post('/quartos', [QuartosController::class, 'store']); // ('/quartos') caminho depois do class nome da funcao quartos

Route::get('/quartos/edit/{id}',[QuartosController::class, 'edit'])->name('quartos.edit'); // novo

Route::get('lista', [QuartosController::class, 'index2'])->name('quartos.index2'); // novo


Route::patch('/quartos/{id}',[QuartosController::class, 'update'])->name('quartos.update'); // novo


Route::delete('/quartos/{id}', [QuartosController::class, 'destroy'])->where('id', '[0-9]+')->name('quartos.destroy');
 
/* RESERVAS */


Route::post('/criar_reserva/{id}', [QuartosController::class, 'criar_reserva']); // Define the route with a parameter


