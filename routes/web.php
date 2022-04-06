<?php

use Illuminate\Support\Facades\Route;


// | HOME
Route::get('/', function () {
    return view('index');
});


// | PRODUTOS
Route::get('/produtos', function () {
    return view('produto.produtos');
});
Route::get('/produtos/cadastro', function () {
    return view('produto.cadastroProduto');
});


// | CONFIGURAÇÕES PRODUTOS
Route::get('/configproduto', function () {
    return view('configProduto.configProduto');
});

// | ESTOQUE
Route::get('/estoque', function () {
    return view('estoque.estoque');
});

