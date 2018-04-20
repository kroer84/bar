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
/*---------------------------------------------------------------------------------- */
/*---------------------------------------------------------------------------------- */
/*------------------------------------Login----------------------------------------- */
Route::view('/','welcome');
/*---------------------------------------------------------------------------------- */

/*---------------------------------CRUD_Categorias---------------------------------- */
Route::resource('/categorias', 'CategoryController',['except'=>['show']]);
/*---------------------------------------------------------------------------------- */

/*---------------------------------CRUD_Productos---------------------------------- */
Route::resource('/productos', 'ProductController');
/*---------------------------------------------------------------------------------- */

/*----------------------------------Manejo de Cuentas------------------------------- */
Route::get('/inicio','CountController@index')->name('inicio');
Route::post('/ventas','CountController@venta');
Route::get('/estado/{id}','CountController@estado');
Route::get('/confirmar/{id}','CountController@confirmar');
Route::resource('/cuentas','CountController');
Route::get('/historial','CountController@historial');
Route::get('/historial/{id}','CountController@cobrado');
Route::get('/reactivar/{id}','CountController@reactivar');
Route::get('/agregar/{id}','CountController@agregar');
/*-----------------------------------------------------------------------------------*/
/*----------------------------------Inventario-------------------------------------- */
Route::resource('/inventario','InventarioController');
Route::get('/ventas','InventarioController@ventas');
/*---------------------------------------------------------------------------------- */

/*----------------------------Manejo de usuarios------------------------------------*/
Auth::routes();
Route::get('/usuarios', 'AuthController@index')->name('usuarios.index');
Route::get('/usuarios/crear', 'AuthController@create')->name('usuarios.create');
Route::get('/usuarios/{id}/editar', 'AuthController@edit')->name('usuarios.edit')->where(['id'=>'[\d]+']);
Route::put('/usuarios', 'AuthController@update')->name('usuarios.update');
Route::delete('/usuarios', 'AuthController@delete')->name('usuarios.delete');
/*----------------------------------------------------------------------------------*/



/*-------------------------------Manejo de PDF--------------------------------------*/
Route::get('/ticket/{id}', 'PdfController@index')->name('generate-pdf');
/*---------------------------------------------------------------------------------- */