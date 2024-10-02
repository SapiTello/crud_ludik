<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductoController;

//Ruta para pagina de bienvenida
Route::get('/', function () {
    return view('auth.login');
});

// Ruta para autenticacion
Auth::routes();
Route::resource('producto', App\Http\Controllers\ProductoController::class)->middleware('auth');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('productos', ProductoController::class);