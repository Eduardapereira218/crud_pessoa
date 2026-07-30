<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

// Importa o Controller da Pessoa
use App\Http\Controllers\ProdutoController;
 
// Rota GET - usada para buscar/listar pessoas
// Quando acessada, chama a função index() do Controller
Route::get('/produtos', [ProdutoController::class, 'index']);
 
// Rota POST - usada para cadastrar uma pessoa
// Quando acessada, chama a função store() do Controller
Route::post('/produtos', [ProdutoController::class, 'store']);
 
// Rota DELETE - usada para excluir uma pessoa
// Envia o ID para a função destroy() do Controller
Route::delete('/produtos/{id}', [ProdutoController::class, 'destroy']);
