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

Route::get('funcionarios','FuncionarioController@index')->name('funcionarios.index');
Route::get('funcionarios/novo','FuncionarioController@create')->name('funcionarios.create');
Route::get('funcionarios/{funcionario}','FuncionarioController@show')->name('funcionarios.show');
Route::post('funcionarios/store', 'FuncionarioController@store')->name('funcionarios.store');
Route::delete('funcionarios/destroy/{funcionario}', 'FuncionarioController@destroy')->name('funcionarios.destroy');

Route::get('clientes','ClienteController@index')->name('clientes.index');
Route::get('clientes/novo','ClienteController@create')->name('clientes.create');
Route::get('clientes/{cliente}','ClienteController@show')->name('clientes.show');
Route::post('clientes/store', 'ClienteController@store')->name('clientes.store');
Route::delete('clientes/destroy/{cliente}', 'ClienteController@destroy')->name('clientes.destroy');

Route::get('produtos','ProdutoController@index')->name('produtos.index');
Route::get('produtos/novo','ProdutoController@create')->name('produtos.create');
Route::get('produtos/{produto}','ProdutoController@show')->name('produtos.show');
Route::post('produtos/store', 'ProdutoController@store')->name('produtos.store');
Route::delete('produtos/destroy/{produto}', 'ProdutoController@destroy')->name('produtos.destroy');

//Route::get('/funcionarios', function () {
//    return view('funcionario.listAllFuncionario');
//})->name('funcionarios');

//Route::get('clientes', function () {
//    return view('cliente.listAllCliente');
//})->name('clientes');

//Route::get('/produtos', function () {
//    return view('produto.listAllProduto');
//})->name('produtos');
