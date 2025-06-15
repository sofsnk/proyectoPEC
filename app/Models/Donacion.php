<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Donacion extends Model
{
    protected $connection = 'mysql';
    protected $table = 'donacion';
    protected $primaryKey = 'id_donacion';
    protected $fillable = [
        'fecha_donacion',
        'estado',
        'cantidad_dispositivos',
        'observaciones',
        'id_usuario',
        'activo'
    ];
    public $timestamps = false;

    public function dispositivos()
    {
        return $this->hasMany(Dispositivo::class, 'id_donacion');
    }
}
