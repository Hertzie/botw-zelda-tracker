<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Secundaria extends Model
{
    protected $table = 'secundarias';
    protected $primaryKey = 'id_secundaria';
    protected $fillable = [
        'nombre_mision',
        'opc_completada'
    ];
}
