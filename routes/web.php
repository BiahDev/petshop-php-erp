<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use  App\Http\Controllers\ConfigProdutosController;
use  App\Http\Controllers\ClientesController;

// & HOME
Route::get('/', function () {
    return view('index');
});



// & ESTOQUE
Route::get('/estoque', function () {
    return view('estoque.estoque');
});



// & CLIENTE
Route::get('/cliente/cadastro', function () {
  return view('cliente.cadastroCliente');
});
Route::get('/cliente/editar', function () {
  return view('cliente.editarCliente');
});

Route::controller(ClientesController::class)->group(function () {
  Route::get('/clientes', 'index');
  Route::post('/cliente/cadastro', 'cadastrarCliente')->name('cadastrarCliente');
  Route::get('/cliente/editar/{id}', 'detalheCliente')->name('detalheCliente');
  Route::put('/cliente/editar/{id}', 'editarCliente')->name('editarCliente');
  Route::delete('/cliente/excluir', 'excluirCliente')->name('excluirCliente');
});


// & PRODUTOS
Route::get('/produtos', function () {
    return view('produto.produtos');
});
Route::get('/produto/cadastro', function () {
    return view('produto.cadastroProduto');
});
Route::get('/produto/editar', function () {
    return view('produto.editarProduto');
});



// & CONFIGURAÇÕES PRODUTOS

Route::controller(ConfigProdutosController::class)->group(function () {
  Route::get('/configproduto', 'index');

  // # Marca
  Route::post('/configproduto/marca/cadastrar', 'cadastrarMarca')->name('cadastrarMarca');
  Route::post('/configproduto/marca/editar', 'editarMarca')->name('editarMarca');
  Route::delete('/configproduto/marca/excluir', 'excluirMarca')->name('excluirMarca');

  // # Categoria
  Route::post('/configproduto/categoria/cadastrar', 'cadastrarCategoria')->name('cadastrarCategoria');
  Route::post('/configproduto/categoria/editar', 'editarCategoria')->name('editarCategoria');
  Route::delete('/configproduto/categoria/excluir', 'excluirCategoria')->name('excluirCategoria');

  // # SubCategoria
  Route::post('/configproduto/subcategoria/cadastrar', 'cadastrarSubCategoria')->name('cadastrarSubCategoria');
  Route::post('/configproduto/subcategoria/editar', 'editarSubCategoria')->name('editarSubCategoria');
  Route::delete('/configproduto/subcategoria/excluir','excluirSubCategoria')->name('excluirSubCategoria');
});
