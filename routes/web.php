<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\AdminDispositivosController;
use App\Http\Controllers\Admin\AdminDonacionesController;
use App\Http\Controllers\Admin\AdminEstadisticasController;
use App\Http\Controllers\Admin\AdminProyectosController;
use App\Http\Controllers\Admin\AdminVentasController;
use App\Http\Controllers\Auth\GoogleController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\ResetPasswordController;
use App\Http\Controllers\DonacionesController;
use App\Http\Controllers\GaleriaController;
use App\Http\Controllers\ProyectosController;
use App\Http\Middleware\AuthAdmin;
use Illuminate\Routing\ResolvesRouteDependencies;
use Illuminate\Support\Facades\Route;

//Pagina principal
Route::view('/', 'index')->name('home');
Route::view('/centros de acopio', 'centros_acopio')->name('centros');
Route::view('/estadisticas', 'estadisticas')->name('estadisticas');
Route::get('/galeria de imagenes', [GaleriaController::class, 'index'])->name('galeria');
Route::get('/proyectos', [ProyectosController::class, 'index'])->name('proyectos');

//Inicio de sesion
Route::view('/login', 'auth.login')->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login.user');

//Crear cuenta
Route::view('/register', 'auth.register')->name('register');
Route::post('/register', [RegisterController::class, 'register'])->name('register.user');

//Con google
Route::get('auth/google', [GoogleController::class, 'redirectToGoole'])->name('auth.google');
Route::get('auth/google/callback', [GoogleController::class, 'handleGoogleCallback'])->name('auth.google.callback');

//Actualizar contraseña
Route::view('password/reset', 'auth.reset')->name('reset');
Route::post('password/reset', [ResetPasswordController::class, 'sendMail'])->name('reset.send');
Route::get('/password/reset/{email}/{token}', [ResetPasswordController::class, 'index'])->name('password');
Route::post('/password/reset/update', [ResetPasswordController::class, 'updatePassword'])->name('reset.password');

//Cerrer sesion
Route::post('/logout', [LogoutController::class, 'logout'])->name('logout');

//Donar dispositivos
Route::get('/donar dispositivo', [DonacionesController::class, 'index'])->name('donacion');
Route::post('/donar dispositivo', [DonacionesController::class, 'donacion'])->name('donacion.user');
Route::put('/donaciones/historial', [DonacionesController::class, 'cancelar'])->name('donacion.cancelar');

Route::get('/donaciones/historial', [DonacionesController::class, 'historial'])->name('donacion.historial');


//Administradores
Route::prefix('/admin')->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('admin.inicio');
    Route::get('/dispositivos', [AdminDispositivosController::class, 'index'])->name('admin.dispositivos');
    Route::get('/donaciones', [AdminDonacionesController::class, 'index'])->name('admin.donaciones');
    Route::get('/estadisticas', [AdminEstadisticasController::class, 'index'])->name('admin.estadisticas');
    Route::get('/ventas', [AdminVentasController::class, 'index'])->name('admin.ventas');
    Route::get('/proyectos', [AdminProyectosController::class, 'index'])->name('admin.proyectos');
});
