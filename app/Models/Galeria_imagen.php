<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Galeria_imagen extends Model
{
    protected $connection = 'mysql';
    protected $table = 'galeria_imagen';
    protected $primaryKey = 'id_galeria_imagen';
    protected $fillable = [
        'id_galeria',
        'imagen',
    ];
    public $timestamps = false;
}
