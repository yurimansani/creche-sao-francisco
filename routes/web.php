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
    return view('admin');
});

Route::get('/admin', function () {
    return view('admin');
});

Route::get('/admin/eventos','Admin\\EventosController@index')->name('eventos');
Route::get('/admin/eventos/editar','Admin\\EventosController@edit')->name('eventos.editar');
Route::get('/admin/eventos/cadastrar','Admin\\EventosController@index')->name('eventos.cadastrar');
//Route::get('/admin/eventos/editar','Admin\\EventosController@index')->name('eventos.editar
//');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
