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
Route::resource('clientes', 'clientesController');
Route::resource('productos', 'productosController');
//Route::get('/clientes_create', 'clientesController@store');
//Route::any('/clientes_edit', 'clientesController@edit');
Route::resource('proveedores', 'proveedoresController');

Route::resource('ventas', 'ventasController');
Route::resource('ventas_detalle', 'ventas_detalleController');
Route::resource('clientes_proveedor', 'clientes_proveedoresController');
