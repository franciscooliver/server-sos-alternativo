<?php

use Illuminate\Http\Request;
<<<<<<< HEAD
//insere
Route::resource('oficinas','OficinaController');
//retorna
Route::resource('oficina','OficinaController');
//insere
Route::resource('clientes','ClienteController');
//retorna
Route::resource('cliente','ClienteController');
=======

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

/*Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:api');*/


//Inserir oficina
Route::resource('oficinas','OficinaController@store');
//Retornar todas as oficinas
Route::resource('oficina','OficinaController@index');
>>>>>>> upstream/master
