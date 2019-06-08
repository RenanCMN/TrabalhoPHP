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
    return view('welcome');
});
Route::get('/clientes', 'ClientesController@index');
Route::get('/clientes/novo', 'ClientesController@create');
Route::post('/clientes/salvar', 'ClientesController@store');
Route::post('/clientes/gravar/{codigo}', 'ClientesController@update');
Route::get('/clientes/{codigo}', 'ClientesController@show');
Route::get('/clientes/editar/{codigo}', 'ClientesController@edit');
Route::get('/clientes/excluir/{codigo}', 'ClientesController@destroy');