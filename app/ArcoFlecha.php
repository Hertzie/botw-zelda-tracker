<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ArcoFlecha extends Model
{
    //
    protected $table = 'arcos_flechas';
    protected $primaryKey = 'id_arco_flecha';

    protected $fillable = [
        'nombre_arco_flecha',
        'opc_obtenido'
    ];
}
