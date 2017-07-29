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
    return view('auth/login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('/almacen', 'AlmacenController', [
	'names' => [
		'edit' => 'almacen_edit_path',
		'create' => 'almacen_create_path',
		'store' => 'almacen_store_path',
		'update' => 'almacen_update_path',
	]
]);
Route::get('almacen/{id}/delete',['as' => 'almacen_delete_path', 'uses' => 'AlmacenController@destroy']);

Route::resource('/articulo', 'ArticuloController', [
	'names' => [
		'edit' => 'articulo_edit_path',
		'create' => 'articulo_create_path',
		'store' => 'articulo_store_path',
		'update' => 'articulo_update_path',
	]
]);
Route::get('articulo/{id}/delete',['as' => 'articulo_delete_path', 'uses' => 'ArticuloController@destroy']);

Route::resource('/tipos-inventario', 'TiposInventarioController', [
	'names' => [
		'edit' => 'tipos_inventario_edit_path',
		'create' => 'tipos_inventario_create_path',
		'store' => 'tipos_inventario_store_path',
		'update' => 'tipos_inventario_update_path',
	]
]);
Route::get('tipos_inventario/{id}/delete',['as' => 'tipos_inventario_delete_path', 'uses' => 'TiposInventarioController@destroy']);

Route::resource('/transaccion', 'TransaccionController', [
	'names' => [
		'edit' => 'transaccion_edit_path',
		'create' => 'transaccion_create_path',
		'store' => 'transaccion_store_path',
		'update' => 'transaccion_update_path',
	]
]);
Route::get('transaccion/{id}/delete',['as' => 'transaccion_delete_path', 'uses' => 'TransaccionController@destroy']);