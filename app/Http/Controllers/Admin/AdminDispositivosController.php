<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Dispositivo;
use Illuminate\Http\Request;

class AdminDispositivosController extends Controller
{
    public function index()
    {
        $dispositivosData = Dispositivo::all();
        $dispositivos = $dispositivosData->toArray();

        return view('admin.dispositivos', compact('dispositivos'));
    }
}
