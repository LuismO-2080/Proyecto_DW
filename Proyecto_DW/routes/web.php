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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get( '/tienda' , 'TiendaController@index');
Route::get( '/tienda/new' , 'TiendaController@create');
Route::post( '/tienda/save/' , 'TiendaController@store');
Route::get( '/tienda/edit' , 'TiendaController@edit');
Route::patch( '/tienda/{tienda}/update' , 'TiendaController@update');
Route::delete( '/tienda/remove/{tienda}' , 'TiendaController@destroy');
