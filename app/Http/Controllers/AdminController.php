<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function inicio()
    {
        return view('admin.inicio');
    }

    public function dispositivos()
    {
        return view('admin.dispositivos');
    }

    public function donaciones()
    {
        return view('admin.donaciones');
    }

    public function estadisticas()
    {
        return view('admin.estadisticas');
    }

    public function ventas()
    {
        return view('admin.ventas');
    }
}
