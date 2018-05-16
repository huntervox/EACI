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
    return view('index');
});

Route::get('/graficas', 'UserController@graficas')->name('graficas');


Route::post('inscribir/{id?}','UserController@store')->name('inscribir');

Route::get('consultar/{cod_ced?}','UserController@consultar')->name('consultar');