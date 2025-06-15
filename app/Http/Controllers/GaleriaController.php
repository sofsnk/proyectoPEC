<?php

namespace App\Http\Controllers;

use App\Models\Galeria;
use Illuminate\Http\Request;

class GaleriaController extends Controller
{
    public function index()
    {
        $trabajos = Galeria::with('enlaces', 'imagenes')->get();

        $primero = [];
        $segundo = [];
        $tercero = [];
        $cuarto = [];
        $quinto = [];
        $sexto = [];

        foreach ($trabajos as $trabajo) {
            switch ($trabajo['semestre']) {
                case '1':
                    $primero[] = $trabajo;
                    break;
                case '2':
                    $segundo[] = $trabajo;
                    $semestres[] = $segundo; 
                    break;
                case '3':
                    $tercero[] = $trabajo;
                    break;
                case '4':
                    $cuarto[] = $trabajo;
                    break;
                case '5':
                    $quinto[] = $trabajo;
                    break;
                case '6':
                    $sexto[] = $trabajo;
                    break;
            }
        }
 
        return view('galeria', compact('primero', 'segundo', 'tercero', 'cuarto', 'quinto', 'sexto'));
    }
}
