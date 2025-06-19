<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Galeria;
use Illuminate\Http\Request;

class AdminProyectosController extends Controller
{
    public function index()
    {
        $proyectosData = Galeria::with('enlaces', 'imagenes')->get();
        $proyectos = $proyectosData->toArray();

        return view('admin.proyectos', compact('proyectos'));
    }
}
