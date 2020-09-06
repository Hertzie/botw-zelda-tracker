<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Arma extends Model
{
    protected $table = 'armas';
    protected $primaryKey = 'id_arma';
    protected $fillable = [
        'nombre_arma',
        'opc_obtenida'
    ];
}
