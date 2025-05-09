<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LibrosController;
use App\Http\Controllers\PrestamosController;

Route::get('/', function () {
    return view('welcome');
});


Route::resource('libros', LibrosController::class);
Route::resource('prestamos', PrestamosController::class);