<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use  App\Http\Controllers as Controllers;

// | HOME
Route::get('/', function () {
    return view('index');
});



// | ESTOQUE
Route::get('/estoque', function () {
    return view('estoque.estoque');
});



// | PRODUTOS
Route::get('/produtos', function () {
    return view('produto.produtos');
});
Route::get('/produto/cadastro', function () {
    return view('produto.cadastroProduto');
});
Route::get('/produtos/editar', function () {
    return view('produto.editarProduto');
});



// | CONFIGURAÇÕES PRODUTOS

Route::get('/configproduto', [Controllers\ConfigProdutosController::class, 'index']);


// * Marca
Route::post('/configproduto/marca/cadastrar',
[Controllers\ConfigProdutosController::class, 'cadastrarMarca'])
->name('cadastrarMarca');
Route::post('/configproduto/marca/editar',
[Controllers\ConfigProdutosController::class, 'editarMarca'])
->name('editarMarca');
Route::delete('/configproduto/marca/excluir',
[Controllers\ConfigProdutosController::class, 'excluirMarca'])
->name('excluirMarca');


// * Categoria
Route::post('/configproduto/categoria/cadastrar',
[Controllers\ConfigProdutosController::class, 'cadastrarCategoria'])
->name('cadastrarCategoria');
Route::post('/configproduto/categoria/editar',
[Controllers\ConfigProdutosController::class, 'editarCategoria'])
->name('editarCategoria');
Route::delete('/configproduto/categoria/excluir',
[Controllers\ConfigProdutosController::class, 'excluirCategoria'])
->name('excluirCategoria');


// * SubCategoria
Route::post('/configproduto/subcategoria/cadastrar',
[Controllers\ConfigProdutosController::class,'cadastrarSubCategoria'])
->name('cadastrarSubCategoria');
Route::post('/configproduto/subcategoria/editar',
[Controllers\ConfigProdutosController::class, 'editarSubCategoria'])
->name('editarSubCategoria');
Route::delete('/configproduto/subcategoria/excluir',
[Controllers\ConfigProdutosController::class, 'excluirSubCategoria'])
->name('excluirSubCategoria');