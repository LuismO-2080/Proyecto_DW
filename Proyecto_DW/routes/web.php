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

Route::get( '/empleado' , 'EmpleadoController@index');
Route::get( '/empleado/new' , 'EmpleadoController@create');
Route::post( '/empleado/save/' , 'EmpleadoController@store');
Route::get( '/empleado/edit' , 'EmpleadoController@edit');
Route::patch( '/empleado/{tienda}/update' , 'EmpleadoController@update');
Route::delete( '/empleado/remove/{tienda}' , 'EmpleadoController@destroy');

Route::get( '/proveedor' , 'ProveedorController@index');
Route::get( '/proveedor/new' , 'ProveedorController@create');
Route::post( '/proveedor/save/' , 'ProveedorController@store');
Route::get( '/proveedor/edit' , 'ProveedorController@edit');
Route::patch( '/proveedor/{tienda}/update' , 'ProveedorController@update');
Route::delete( '/proveedor/remove/{tienda}' , 'ProveedorController@destroy');