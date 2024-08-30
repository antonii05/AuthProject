<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\JWTMiddleware;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth.LoginView');
});

/* AUTHENTICATION */
Route::prefix('auth')->group(function () {
    Route::post('/logout', [AuthController::class, 'logout'])->name('auth.logout');
    Route::post('/login', [AuthController::class, 'login'])->name('auth.login');
    Route::post('/register', [AuthController::class, 'register'])->name('auth.register');
    Route::get('/registro', [AuthController::class, 'registro'])->name('auth.registro');
});

//Controladores
/* usuarios */
Route::resource('usuarios', UserController::class);
Route::post('/usuarios/nuevo', [UserController::class, 'crear'])->name('usuario.nuevo');

//Clientes
Route::resource('clientes', ClienteController::class);
Route::post('/clientes/crear', [ClienteController::class, 'crear'])->name('clientes.crear');

//Productos
Route::resource('productos', ProductoController::class);
Route::post('/productos/nuevo', [ProductoController::class, 'crear'])->name('productos.nuevo');

/* Home */
Route::get('/home', function () {
    return view('HomeView');
})->name('home');
