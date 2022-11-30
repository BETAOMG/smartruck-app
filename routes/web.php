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

Route::get('/inicio', function () {
    return view('inicio');
});

Route::get('/usuarios', function () {
    return view('usuarios');
});

Route::get('/proveedores', function () {
    return view('proveedores');
});

Route::get('/vehiculos', function () {
    return view('vehiculos');
});

Route::get('/mantenimiento', function () {
    return view('mantenimiento');
});

Route::get('/documentacion', function () {
    return view('documentacion');
});

Route::get('/normativa', function () {
    return view('normativa');
});

Route::get('/rutas/satrack', function () {
    return view('satrack');
});

Route::get('/rutas/peajes', function () {
    return view('peajes');
});

Route::get('/rutas/cierrevial', function () {
    return view('cierrevial');
});

Route::get('/atencioncliente', function () {
    return view('atencioncliente');
});

Route::get('/login', function () {
    return view('login');
});
