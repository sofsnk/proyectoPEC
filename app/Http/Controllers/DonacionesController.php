<?php

namespace App\Http\Controllers;

use App\Models\Donacion;
use Illuminate\Http\Request;

class DonacionesController extends Controller
{
    public function donacion(Request $request)
    {
        dd($request);
    }

    public function historial()
    {
        $historialData = Donacion::where('id_usuario',3 )->with('dispositivos.categoria')->get();
        $historial = $historialData->toArray();

        return view('donacion.historial', compact('historial'));
    }
}
