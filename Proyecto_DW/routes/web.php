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
Route::resource('/proveedores','ProveedorController');
Route::resource('/productos','ProductoController');
Route::resource('/empleados','EmpleadoController');

Route::get( '/tienda' , 'TiendaController@index');
Route::get( '/tienda/new' , 'TiendaController@create');
Route::get( '/tienda/list' , 'TiendaController@list');
Route::post( '/tienda/save' , 'TiendaController@store');
Route::get( '/tienda/edit' , 'TiendaController@edit');
Route::patch( '/tienda/{tienda}/update' , 'TiendaController@update');
Route::delete( '/tienda/remove/{tienda}' , 'TiendaController@destroy');

Route::get( '/empleado' , 'EmpleadoController@index');
Route::get( '/empleado/new' , 'EmpleadoController@create');
Route::get( '/empleado/list' , 'EmpleadoController@list');
Route::post( '/empleado/save' , 'EmpleadoController@store');
Route::get( '/empleado/edit' , 'EmpleadoController@edit');
Route::patch( '/empleado/{empleado}/update' , 'EmpleadoController@update');
Route::delete( '/empleado/remove/{empleado}' , 'EmpleadoController@destroy');

Route::get( '/proveedor' , 'ProveedorController@index');
Route::get( '/proveedor/new' , 'ProveedorController@create');
Route::get( '/proveedor/list' , 'ProveedorController@list');
Route::post( '/proveedor/save' , 'ProveedorController@store');
Route::get( '/proveedor/edit' , 'ProveedorController@edit');
Route::patch( '/proveedor/{proveedor}/update' , 'ProveedorController@update');
Route::delete( '/proveedor/remove/{proveedor}' , 'ProveedorController@destroy');

Route::get( '/producto' , 'ProductoController@index');
Route::get( '/producto/new' , 'ProductoController@create');
Route::get( '/producto/list' , 'ProductoController@list');
Route::post( '/producto/save' , 'ProductoController@store');
Route::get( '/producto/edit' , 'ProductoController@edit');
Route::patch( '/producto/{producto}/update' , 'ProductoController@update');
Route::delete( '/producto/remove/{producto}' , 'ProductoController@destroy');

Route::get( '/serie' , 'SerieController@index');
Route::get( '/serie/new' , 'SerieController@create');
Route::post( '/serie/save' , 'SerieController@store');
Route::get( '/serie/edit' , 'SerieController@edit');
Route::patch( '/serie/{serie}/update' , 'SerieController@update');
Route::delete( '/serie/remove/{serie}' , 'SerieController@destroy');

Route::resource('tienda','TiendaController');