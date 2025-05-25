<?php

use App\Http\Controllers\AdminController;
use App\Http\Middleware\AuthAdmin;
use Illuminate\Support\Facades\Route;

//Pagina principal
Route::view('/', 'index')->name('home');
Route::view('/centros de acopio', 'centros_acopio')->name('centros');
Route::view('/estadisticas', 'centros_acopio')->name('estadisticas');
Route::view('/galeria de imagenes', 'centros_acopio')->name('galeria');

//Donar dispositivos
Route::view('/donar dispositivo', 'donacion.donar')->name('donacion.donar');
Route::view('/donaciones/historial', 'donacion.historial')->name('donacion.historial');

//Administradores
Route::view('/admin/login', 'admin.auth.login')->name('admin.login');
Route::view('/admin/register', 'admin.auth.register')->name('admin.register');

Route::middleware(AuthAdmin::class)->group(function () {
    Route::get('/admin', [AdminController::class, 'inicio'])->name('admin.inicio');
    Route::get('/admin/dispositivos', [AdminController::class, 'dispositivos'])->name('admin.dispositivos');
    Route::get('/admin/donaciones', [AdminController::class, 'donaciones'])->name('admin.donaciones');
    Route::get('/admin/estadisticas', [AdminController::class, 'estadisticas'])->name('admin.estadisticas');
    Route::get('/admin/ventas', [AdminController::class, 'ventas'])->name('admin.ventas');
});
