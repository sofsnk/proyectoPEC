<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Session\SessionController;
use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class LoginController extends SessionController
{
    public function login(Request $request)
    {
        $request->validate([
            'correo' => 'required|email',
            'contraseña' => 'required|string'
        ]);

        $usuario = Usuario::where('correo', $request['correo'])->first();

        if ($usuario === null) {
            return redirect()->back()->with([
                'mensaje' => 'No se encontró ningun usuario con este correo'
            ]);
        }

        if(Hash::check($request['contraseña'], $usuario['contraseña']))
        {
            $this->CreateSession($usuario);
            
            return redirect()->back()->with([
                'mensaje' => 'Se inició sesion correctamente'
            ]);
        }
    }
}
