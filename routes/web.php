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

Route::Resource('/','Inicio');

//---------------Rutas del menu
Route::Resource('Inicio','Inicio');
Route::Resource('Formulario','Formulario');
Route::Resource('Sesion','Sesion');



//-----------------rutas del crud
Route::Resource('Departamento','Departament');
Route::Resource('Municipio','Municip');
Route::Resource('Tiquete','Tiquetes');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
