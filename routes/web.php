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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
