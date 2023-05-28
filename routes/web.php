<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\inicioController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Rutas de vista 1 y 2
Route::get('/inicio','inicioController@inicio');
Route::get('/contactos','inicioController@contactos');

// Rutas de vistas 3 y 4
Route::get('/productos','ProductosController@productos');
Route::get('/servicios','ProductosController@servicios');


// Rutas de vistas 5 y 6
Route::get('/vista5','ClientesController@login');
Route::get('/vista6','ClientesController@formulario');





