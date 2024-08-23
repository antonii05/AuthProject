<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth.LoginView');
});

//Controladores
Route::resource('usuarios', UserController::class);
Route::post('/usuarios/nuevo', [UserController::class, 'crear'])->name('usuario.nuevo');

//Clientes
Route::resource('clientes', ClienteController::class);
Route::post('/clientes/crear', [ClienteController::class, 'crear'])->name('clientes.crear');

//Productos
Route::resource('productos', ProductoController::class);
Route::post('/productos/nuevo', [ProductoController::class, 'crear'])->name('productos.nuevo');

/* AUTHENTICATION */
Route::prefix('auth')->group(function () {
    Route::post('/login', [AuthController::class, 'login'])->name('auth.login');
    Route::post('/register', [AuthController::class, 'register'])->name('auth.register');
});

Route::get('/home', function () {
    return view('HomeView');
})->name('home');
