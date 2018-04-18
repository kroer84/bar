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
Route::view('/inicio','home')->name('inicio');
Route::post('/ventas','CountController@venta');
Route::get('/estado/{id}','CountController@estado');
Route::get('/confirmar/{id}','CountController@confirmar');
Route::resource('/cuentas','CountController');
Route::get('/historial','CountController@historial');
Route::get('/agregar/{id}','CountController@agregar');
/*-----------------------------------------------------------------------------------*/

/*----------------------------Manejo de usuarios------------------------------------*/
Auth::routes();
Route::get('/usuarios', 'Auth\RegisterController@index')->name('register.index');
Route::get('/usuarios/crear', 'Auth\RegisterController@index')->name('register.create');
/*----------------------------------------------------------------------------------*/



/*-------------------------------Manejo de PDF--------------------------------------*/
Route::get('/ticket', 'PdfController@index')->name('generate-pdf');
/*---------------------------------------------------------------------------------- */