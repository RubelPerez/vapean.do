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
Route::get('/kits', 'kitController@index');
Route::get('/mods', 'modController@index');
Route::get('/kits', 'kitController@index');
Route::get('/atos', 'atoController@index');
Route::get('/liquids', 'liquidController@index');
Route::get('/accesories', 'accesoryController@index');


Route::get('/home', 'HomeController@index')->name('home');


//crud kits
Route::get('admin/kits/', 'kitController@admin');

//crud MODS
Route::get('admin/mods/', 'modController@admin');

//crud liquid
Route::get('admin/liquids/', 'liquidController@admin');

//crud accesories
Route::get('admin/accesories/', 'accesoryController@admin');


//crud atos
Route::get('admin/atos/', 'atoController@admin');
//detalles
Route::get('/admin/atos/{id}/details', 'atoController@details');
//insertar
Route::get('/admin/atos/{id}/details/create', 'atoController@create');
Route::post('/admin/atos','atoController@store');
//editar
Route::get('/admin/atos/{id}/edit', 'atoController@edit');
Route::post('/admin/atos/{id}/edit','atoController@update');
//delete
Route::get('/admin/atos/{id}/ver','atoController@ver');
Route::delete('/admin/atos/{id}','atoController@destroy');
//fin atos
Auth::routes();