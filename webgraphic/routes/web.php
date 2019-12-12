<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/servicos', function () {
    return view('servico.listAllServico');
})->name('servicos');

Route::get('/produtos', function () {
    return view('produto.listAllProduto');
})->name('produtos');

Route::get('/clientes', function () {
    return view('cliente.listAllCliente');
})->name('clientes');

Route::get('/funcionarios', function () {
    return view('funcionario.listAllFuncionario');
})->name('funcionarios');
