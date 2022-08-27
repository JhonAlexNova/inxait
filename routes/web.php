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

Route::resource('/',WelcomeController::class);

Route::get('ciudades-departamento/{departamento_id}','CiudadController@ciudades_departamento');

Route::resource('usuarios', UsuarioController::class);

Route::get('seleccionar-ganador','GanadorSorteoController@seleccionar_ganador');
Route::resource('ganador-sorteos', GanadorSorteoController::class);


//Auth::routes();

