<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Dispositivo;
use App\Models\Donacion;
use Illuminate\Http\Request;

class DonacionesController extends Controller
{
    public function index()
    {
        $categoriasData = Categoria::where('activo', 1)->get();
        $categorias = $categoriasData->toArray();

        return view('donacion.donar', compact('categorias'));
    }

    public function historial()
    {
        $historialData = Donacion::where('id_usuario', session('id_usuario'))->with('dispositivos.categoria')->get();
        $historial = $historialData->toArray();

        return view('donacion.historial', compact('historial'));
    }

    public function cancelar(Request $request)
    {
        $request->validate([
            'id_donacion' => 'required|integer|min:1'
        ]);

        $donacion = Donacion::where('id_donacion', $request['id_donacion'])->first();
        $donacion->update([
            'estado' => 'Cancelada'
        ]);

        return redirect()->back();
    }

    public function donacion(Request $request)
    {
        $request->validate([
            'fecha_donacion' => 'required|date',
            'dispositivos' => 'required|array|min:1',
            'dispositivos.*.nombre_dispositivo' => 'required|string',
            'dispositivos.*.marca' => 'required|string',
            'dispositivos.*.modelo' => 'required|string',
            'dispositivos.*.descripcion' => 'required|string',
            'dispositivos.*.estado_fisico' => 'required|string',
            'dispositivos.*.id_categoria' => 'required|integer|min:1',
        ]);

        $fecha_actual = now()->toDate();
        $fecha_donacion = $request['fecha_donacion'];

        if ($fecha_donacion <= $fecha_actual) {
            return redirect()->back()->with([
                'mensaje' => 'La fecha no puede ser menor o igual a la fecha actual'
            ]);
        }
        $donacion = $this->crearDonacion(session('id_usuario'), $request['dispositivos'], $fecha_donacion);

        if(empty($donacion))
        {
            return redirect()->back()->with([
                'mensaje' => 'Error, no se pudo crear la donación'
            ]);
        }

        return redirect()->back()->with([
            'mensaje' => 'La donación se creó exitosamente tu id de donación es: '.$donacion['id_donacion']
        ]
        );
    }

    private function crearDonacion($idUsuario, $dispositivos, $fecha) {
        $cantidad = $this->cantidadDispositivos($dispositivos);

        $donacion = Donacion::create([
            'fecha_donacion' => $fecha,
            'cantidad_dispositivos' => $cantidad,
            'id_usuario' => $idUsuario
        ]);

        if($donacion){
            $dispositivos = $this->crearDispositivos($dispositivos, $donacion['id_donacion']);
            if(!empty($dispositivos))
            {
                return $donacion;
            }
            else {
                $donacion->delete();
            }
        }
    }

    private function cantidadDispositivos($dispositivos)
    {
        $cantidad = 0;

        foreach ($dispositivos as $dispositivo) {
            $cantidad += 1;
        }

        return $cantidad;
    }

    private function crearDispositivos($dispositivos, $idDonacion)
    {
        $dispositivosData = [];
        foreach ($dispositivos as $dispositivo) {
            $dispositivoCreate = Dispositivo::create([
                'nombre_dispositivo' => $dispositivo['nombre_dispositivo'],
                'marca' => $dispositivo['marca'],
                'modelo' => $dispositivo['modelo'],
                'descripcion' =>  $dispositivo['descripcion'],
                'estado_fisico'  => $dispositivo['estado_fisico'],
                'id_categoria' => $dispositivo['id_categoria'],
                'id_donacion' => $idDonacion
            ]);
            if(!empty($dispositivoCreate))
            {
                $dispositivosData[] = $dispositivoCreate;
            }
        }
        return $dispositivosData;
    }
}
