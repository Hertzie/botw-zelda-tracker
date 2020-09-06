<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Secciones extends Model
{
    protected $table = 'secciones';
    protected $primaryKey = 'id_seccion';
    protected $fillable = [
        'nombre_seccion',
        'opc_activa'
    ];
}
