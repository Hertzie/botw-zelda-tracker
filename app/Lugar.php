<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lugar extends Model
{
    protected $table = 'lugares';
    protected $primaryKey = 'id_lugar';
    protected $fillable = [
        'nombre_lugar',
        'opc_visitado'
    ];
}
