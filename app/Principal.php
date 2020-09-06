<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Principal extends Model
{
    protected $table = 'principales';
    protected $primaryKey = 'id_principal';
    protected $fillable = [
        'nombre_mision',
        'opc_completada'
    ];
}
