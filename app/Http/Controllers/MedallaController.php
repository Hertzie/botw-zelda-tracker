<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Medalla;

class MedallaController extends Controller
{
    public function index(){
        $medallas = Medalla::all();
        return View('pantallas.medallas', compact('medallas'));
    }

    public function cambiarEstatusMedalla(Request $request){
        $response = null;

        try{
            $medalla = Medalla::findOrFail($request->id_medalla);
            $request->opc_obtenida == 0 ? $medalla->opc_obtenida = 1 : $medalla->opc_obtenida = 0;
            $medalla->save();
            $response = true;
        }catch(Exception $ex){
            $response = false;
        }

        return json_encode($response);
        
    }
}
