<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Password_reset extends Model
{
    protected $connection = 'mysql';
    protected $table = 'password_reset';
    protected $primaryKey = 'id_usuario';
    protected $fillable = [
        'id_usuario',
        'token'
    ];
    public $timestamps = false;
}
