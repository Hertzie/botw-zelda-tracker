<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Torre extends Model
{
    protected $table = 'torres';
    protected $primaryKey = 'id_torre';
    protected $fillable = [
        'nombre_torre',
        'opc_descubierta'
    ];
}
