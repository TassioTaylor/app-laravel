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

Route::get('cliente', 'ClientsController@listar');
Route::get('cliente/form-cadastrar', 'ClientsController@formcadastrar');
Route::post('cliente/cadastrar', 'ClientsController@cadastrar');
Route::get('cliente/{id}/form-editar', 'ClientsController@formeditar');
Route::post('cliente/{id}/editar', 'ClientsController@editar');
Route::get('cliente/{id}/excluir', 'ClientsController@excluir');
