<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Medalla;
use App\Secciones;
use App\ArcoFlecha;
use App\Arma;
use App\Criatura;
use App\Escudo;
use App\Lugar;
use App\Material;
use App\Monstruo;
use App\Principal;
use App\Recuerdo;
use App\Santuario;
use App\Secundaria;
use App\Torre;

class EstadisticasController extends Controller
{
    public function index(){
        $estadisticas = $this->procesarEstadisticas();
        $secciones = Secciones::all();
        return View('pantallas.estadisticas.estadisticas', compact('estadisticas', 'secciones'));
    }

    private static function procesarEstadisticas(){
        $estadisticas = new \stdClass();
        $estadisticas->medallas = Medalla::all();
        $estadisticas->arcos_flechas = ArcoFlecha::all();
        $estadisticas->armas = Arma::all();
        $estadisticas->criaturas = Criatura::all();
        $estadisticas->escudos = Escudo::all();
        $estadisticas->lugares = Lugar::all();
        $estadisticas->materiales = Material::all();
        $estadisticas->monstruos = Monstruo::all();
        $estadisticas->principales = Principal::all();
        $estadisticas->recuerdos = Recuerdo::all();
        $estadisticas->santuarios = Santuario::all();
        $estadisticas->secundarias = Secundaria::all();
        $estadisticas->torres = Torre::all();

        return json_encode($estadisticas);
    }
}
