<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\CidadeController;
use App\Http\Controllers\EstadoController;

// Define a tela inicial para mostrar a lista de clientes
Route::get('/', [ClienteController::class, 'index']);

// Define as rotas para o recurso de clientes
Route::resource('clientes', ClienteController::class);

// Define as rotas para o recurso de cidades
Route::resource('cidades', CidadeController::class);

// Define as rotas para o recurso de estados
Route::resource('estados', EstadoController::class);
