<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Mail\PasswordResetMail;
use App\Models\Password_reset;
use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class ResetPasswordController extends Controller
{
    public function sendMail(Request $request)
    {
        $request->validate([
            'correo' => 'required|email'
        ]);

        $usuario = Usuario::where('correo', $request['correo'])->first();

        if (!$usuario) {
            return redirect()->back()->with([
                'mensaje' => 'Este correo no está asociado a ninguna cuenta'
            ]);
        }

        Password_reset::where('id_usuario', $usuario['id_usuario'])->delete();

        $token = $this->tokenGenerate();

        $password_reset = Password_reset::create([
            'id_usuario' => $usuario['id_usuario'],
            'token' => Hash::make($token)
        ]);

        if (!$password_reset) {
            return redirect()->back()->with([
                'mensaje' => 'No se pudo crear el token'
            ]);
        }

        Mail::to($usuario['correo'])->send(new PasswordResetMail($token, $usuario['correo']));

        return redirect()->back()->with([
            'mensaje' => 'Se envió un enlace de recupereación a su correo'
        ]);
    }

    private function tokenGenerate()
    {
        $token = Str::random(30);

        return $token;
    }

    public function index($email, $token)
    {
        $usuario = Usuario::where('correo', $email)->first();

        if ($usuario) {
            $password_reset = Password_reset::where('id_usuario', $usuario['id_usuario'])->first();
            if ($password_reset) {
                if (Hash::check($token, $password_reset['token'])) {
                    $id = $usuario['id_usuario'];
                    return view('auth.passwordreset', compact('usuario'));
                }
            }
        }
    }

    public function updatePassword(Request $request)
    {
        $data = $request->validate([
            'id_usuario' => 'required|integer|min:1',
            'contraseña' => 'required|string|min:5',
            'contraseña2' => 'required|string|min:5'
        ]);

        if ($request['contraseña2'] != $request['contraseña']) {
            return redirect()->back()->with([
                'mensaje' => 'Las contraseñas deben ser las misma'
            ]);
        }

        return DB::transaction(function () use ($data) {
            $usuario = $this->update($data['contraseña'], $data['id_usuario']);

            if (!$usuario) {
                return redirect()->back()->with([
                    'mensaje' => 'No se pudo actualzar la contraseña'
                ]);
            }

            $token = $this->deleteToken($usuario['id_usuario']);

            if (!$token) {
                return redirect()->back()->with([
                    'mensaje' => 'No se pudo actualzar la contraseña'
                ]);
            }

            return redirect()->back()->with([
                'mensaje' => 'Contraseña actualizada correctamente'
            ]);
        });
    }

    private function update($password, $id)
    {
        $usuario = Usuario::where('id_usuario', $id)->first();

        $usuario->update([
            'contraseña' => Hash::make($password)
        ]);

        return $usuario;
    }

    private function deleteToken($id)
    {
        $token = Password_reset::where('id_usuario', $id)->first();
        $token->delete();
        return $token;
    }
}
