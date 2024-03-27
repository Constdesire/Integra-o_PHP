<?php

use App\Http\Controllers\ContatoController;
use Illuminate\Support\Facades\Route;


Route::get("/pmpj1", [ContatoController::class, "index"]);
Route::post("/adicionarContato", [ContatoController::class, "adicionar"]);
Route::post("/editar/{id}", [ContatoController::class, "editar"]);
Route::post("/atualizar/{id}", [ContatoController::class, "atualizar"]);
Route::post("/excluir/{id}", [ContatoController::class, "excluir"]);