<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Medalla extends Model
{
    protected $table = 'medallas';
    protected $primaryKey = 'id_medalla';
    protected $fillable = [
        'nombre_medalla',
        'opc_obtenida'
    ];
}
