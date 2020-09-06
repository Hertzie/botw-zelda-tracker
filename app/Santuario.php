<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Santuario extends Model
{
    protected $table = 'santuarios';
    protected $primaryKey = 'id_santuario';
    protected $fillable = [
        'nombre_santuario',
        'opc_completado'
    ];
}
