<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', 'App\Http\Controllers\HomeController@index');
Route::get('/gruposMaiorVenda', 'App\Http\Controllers\PedidoController@gruposMaiorVenda');
Route::get('/maiorVenda', 'App\Http\Controllers\PedidoController@maiorVenda');
Route::get('/idoso', 'App\Http\Controllers\ClienteController@idoso');
Route::get('/pedidos', 'App\Http\Controllers\PedidoController@pedidos');
Route::get('/excluirPedido/{id}','App\Http\Controllers\PedidoController@excluirPedido');
Route::get('/produtos', 'App\Http\Controllers\ProdutoController@produtos');
Route::get('/cadastroProduto', 'App\Http\Controllers\ProdutoController@cadastroProduto');
