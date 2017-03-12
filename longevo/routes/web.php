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

Auth::routes();

Route::post('chamado/store', 'ChamadoController@store');
Route::get('/', 'ChamadoController@index');
Route::get('chamado/create', 'ChamadoController@create');
