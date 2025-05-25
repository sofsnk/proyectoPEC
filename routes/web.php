<?php

use App\Http\Controllers\AdminController;
use App\Http\Middleware\AuthAdmin;
use Illuminate\Support\Facades\Route;

Route::view('/', 'index')->name('home');
Route::view('/centros de acopio', 'centros_acopio')->name('centros.acopio');

//Donar dispositivos
Route::view('/donación', 'donacion.donar')->name('donacion');


//Administradores
Route::view('/admin/login', 'auth.loginAdmin')->name('login.admin');
Route::view('/admin/register', 'auth.registerAdmin')->name('register.admin');
Route::get('/admin', [AdminController::class, 'index'])->name('admin')->middleware(AuthAdmin::class);


