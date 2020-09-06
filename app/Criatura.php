<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Criatura extends Model
{
    protected $table = 'criaturas';
    protected $primaryKey = 'id_criatura';
    protected $fillable = [
        'nombre_criatura',
        'opc_encontrada'
    ];
}
