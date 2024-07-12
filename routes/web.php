<?php

use App\Http\Controllers\ClienteController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('HomeView');
})->name('home');

//Controladores
Route::resource('usuarios', UserController::class);
Route::resource('clientes', ClienteController::class);
Route::resource('productos', ProductoController::class);
