<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Armadura extends Model
{
    protected $table = 'armaduras';
    protected $primaryKey = 'id_armadura';
    protected $fillable = [
        'nombre_armadura',
        'opc_obtenida'
    ];
}
