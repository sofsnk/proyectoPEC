<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminDispositivosController;
use App\Http\Controllers\AdminDonacionesController;
use App\Http\Controllers\AdminEstadisticasController;
use App\Http\Controllers\AdminVentasController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\GaleriaController;
use App\Http\Middleware\AuthAdmin;
use Illuminate\Routing\ResolvesRouteDependencies;
use Illuminate\Support\Facades\Route;

//Pagina principal
Route::view('/', 'index')->name('home');
Route::view('/centros de acopio', 'centros_acopio')->name('centros');
Route::view('/estadisticas', 'estadisticas')->name('estadisticas');
Route::get('/galeria de imagenes', [GaleriaController::class, 'index'])->name('galeria');

//Inicio de sesion
Route::view('/login', 'auth.login')->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login.user');

//Crear cuenta
Route::view('/register', 'auth.register')->name('register');
Route::post('/register', [RegisterController::class, 'register'])->name('register.user');

//Donar dispositivos
Route::view('/donar dispositivo', 'donacion.donar')->name('donacion.donar');
Route::view('/donaciones/historial', 'donacion.historial')->name('donacion.historial');

//Administradores
Route::prefix('/admin')->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('admin.inicio');
    Route::get('/dispositivos', [AdminDispositivosController::class, 'index'])->name('admin.dispositivos');
    Route::get('/donaciones', [AdminDonacionesController::class, 'index'])->name('admin.donaciones');
    Route::get('/estadisticas', [AdminEstadisticasController::class, 'index'])->name('admin.estadisticas');
    Route::get('/ventas', [AdminVentasController::class, 'index'])->name('admin.ventas');
});
