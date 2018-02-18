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

Route::get('/inicio', 'HomeController@index')->name('inicio');

/*Esta ruta sirve unicamente como prueba */
Route::get('/prueba',function(){
	return view('products.create');
});

Route::get('/usuarios', 'Auth\RegisterController@index')->name('register.index');

/*Falta checar que nombre va a tener esta ruta porque por defecto ocupa la funcion create pero lo ocupa para crear un nuevo usuario y no para mostrar el formulario*/
Route::get('/usuarios/crear', 'Auth\RegisterController@index')->name('register.create');