<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $connection = 'mysql';
    protected $table = 'usuario';
    protected $primaryKey = 'id_usuario';
    protected $fillable = [
        'nombre',
        'apellido',
        'telefono',
        'correo',
        'tipo_usuario',
        'contraseña',
        'activo'
    ];
    public $timestamps = false;
}
