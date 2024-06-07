<?php

use App\Http\Controllers\QuartosController;
use Illuminate\Support\Facades\Route;

Route::get('/', [QuartosController::class, 'index']); // ('/') caminho depois do class nome da funcao index
Route::get('quartos', [QuartosController::class, 'quartos']); // ('/quartos') caminho depois do class nome da funcao quartos
Route::get('/show/{quarto}', [QuartosController::class, 'show']); // Define the route with a parameter
