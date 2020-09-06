<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Escudo extends Model
{
    protected $table = 'escudos';
    protected $primaryKey = 'id_escudo';
    protected $fillable = [
        'nombre_escudo',
        'opc_obtenido'
    ];
}
