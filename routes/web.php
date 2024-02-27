<?php

use App\Http\Controllers\tipo_asiento;
use Illuminate\Support\Facades\Route;

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

Route::get('/inicio', function () {
    return view('inicio');
});

Route::get('/agregarAsiento', function () {
    return view('agregarAsiento');
});

Route::get('agregarTipoAsiento', function () {
    return view('agregarTipoAsiento');
});

Route::get('editarAsiento', function () {
    return view('editarAsiento');
});

Route::get('editarVuelo', function () {
    return view('editarVuelo');
});

Route::get('nuevoVuelo', function () {
    return view('nuevoVuelo');
});

Route::get('tiposAsientos', function () {
    return view('tiposAsientos');
});

Route::get('vueloAsientos', function () {
    return view('vueloAsientos');
});

Route::get('vuelos', function () {
    return view('vuelos');
});

Route::get('welcome', function () {
    return view('welcome');
});

