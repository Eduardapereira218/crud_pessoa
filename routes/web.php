<?php

use Illuminate\Support\Facades\Route;

// Ao acessar a raiz do site, carrega a tela do CRUD (Vue.js)
Route::get('/', function () {
    return view('crud');
});
