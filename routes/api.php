<?php

use Illuminate\Http\Request;
//insere
Route::resource('oficinas','OficinaController');
//retorna
Route::resource('oficina','OficinaController');
//insere
Route::resource('clientes','ClienteController');
//retorna
Route::resource('cliente','ClienteController');
//insere
Route::resource('registros','RegistroController');
//retorna
Route::resource('registro','RegistroController');


