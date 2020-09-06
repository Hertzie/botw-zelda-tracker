<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recuerdo extends Model
{
    protected $table = 'recuerdos';
    protected $primaryKey = 'id_recuerdo';
    protected $fillable = [
        'nombre_recuerdo',
        'opc_encontrado'
    ];
}
