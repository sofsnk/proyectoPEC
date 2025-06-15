<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Galeria_enlace extends Model
{
    protected $connection = 'mysql';
    protected $table = 'galeria_enlace';
    protected $primaryKey = 'id_galeria_enlace';
    protected $fillable = [
        'id_galeria',
        'enlace',
        'titulo_enlace'
    ];
    public $timestamps = false;
}
