<?php

use Illuminate\Support\Facades\Route;

use  App\Http\Controllers as Controllers;
// | HOME
Route::get('/', function () {
    return view('index');
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

Route::get('/configproduto', [Controllers\MarcasController::class, 'index']);
Route::post('/configproduto/marca/cadastrar',[Controllers\MarcasController::class, 'cadastrarMarca'])->name('cadastrarMarca');

Route::post('/configproduto/marca/editar',[Controllers\MarcasController::class, 'editarMarca'])->name('editarMarca');

Route::delete('/configproduto/marca/excluir',[Controllers\MarcasController::class, 'excluirMarca'])->name('excluirMarca');




// | ESTOQUE
Route::get('/estoque', function () {
    return view('estoque.estoque');
});

