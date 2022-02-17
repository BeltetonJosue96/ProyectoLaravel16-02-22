<?php

use Illuminate\Support\Facades\Route;

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
    return view('index');
});


#Ruta hacia la modificacion de alumnos
Route::get('/Alumnos/edit','\App\Http\Controllers\AlumnosController@edit');

#Ruta hacia el formulario de alumnos
Route::get('/Alumnos/createAlumnos','\App\Http\Controllers\AlumnosController@create');

#General
Route::resource('Alumnos', '\App\Http\Controllers\AlumnosController');


/*Ruta hacia el formulario
Route::get('/Alumnos/createForm','\App\Http\Controllers\AlumnosController@create');*/
