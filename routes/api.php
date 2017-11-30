<?php

use Illuminate\Http\Request;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('obtenercliente/{id}', 'clientesController@obtener_cliente');
Route::post('ingresarcliente', 'clientesController@ingresar_cliente');
Route::delete('eliminarcliente/{id}', 'clientesController@eliminar_cliente');
Route::put('modificarcliente/{id}', 'clientesController@modificar_cliente');

Route::get('obtenerproducto/{id}', 'productosController@obtener_producto');
Route::post('ingresarproducto', 'productosController@ingresar_producto');
Route::delete('eliminarproducto/{id}', 'productosController@eliminar_producto');
Route::put('modificarproducto/{id}', 'productosController@modificar_producto');

Route::get('obtenerproveedor/{id}', 'proveedoresController@obtener_proveedor');
Route::post('ingresarproveedor', 'proveedoresController@ingresar_proveedor');
Route::delete('eliminarproveedor/{id}', 'proveedoresController@eliminar_proveedor');
Route::put('modificarproveedor/{id}', 'proveedoresController@modificar_proveedor');

Route::get('obtenerventas/{id}', 'ventasController@obtener_ventas');


