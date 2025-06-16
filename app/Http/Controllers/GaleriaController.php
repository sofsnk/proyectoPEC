<?php

namespace App\Http\Controllers;

use App\Models\Galeria;
use Illuminate\Http\Request;

class GaleriaController extends Controller
{
    public function index()
    {
        $trabajosData = Galeria::with('enlaces', 'imagenes')->get();
        $trabajos = $trabajosData->toArray();

        return view('galeria', compact('trabajos'));
    }
}
