<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Galeria extends Model
{
    protected $connection = 'mysql';
    protected $table = 'galeria';
    protected $primaryKey =  'id_galeria';
    protected $fillable = [
        'nombre_docente',
        'UAC',
        'semestre',
        'grupo',
        'especialidad',
        'progresion',
        'titulo',
        'descripcion',
        'fecha_realizacion',
        'enlaces',
        'imagen',
        'activo'
    ];
    public $timestamps = false;
}
