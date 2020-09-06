<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Monstruo extends Model
{
    protected $table = 'monstruos';
    protected $primaryKey = 'id_monstruo';
    protected $fillable = [
        'nombre_monstruo',
        'opc_encontrado'
    ];
}
