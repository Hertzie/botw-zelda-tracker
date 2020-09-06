<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Secciones;

class ConfiguracionController extends Controller
{
    public function index(){
        $seccionesConf = Secciones::all();
        return View('pantallas.configuracion.secciones', compact('seccionesConf'));
    }

    public function cambiarEstatusSeccion(Request $request){
        $response = null;

        // try{
        //     $seccion = Secciones::find($request->id_seccion);
        //     $request->opc_activa == 0 ? $seccion->opc_activa = 1 : $seccion->opc_activa = 0;
        //     $seccion->save();
        //     $response = true;
        // }catch(Exception $ex){
        //     $response = false;
        // }

        // return json_encode($response);
        try{
            $objetos = $request->all();

            foreach($objetos as $obj){
                $seccion = Secciones::find($obj['id_seccion']);
                $seccion->opc_activa = $obj['opc_activa'];
                $seccion->save();
            }
            $response = true;

        }catch(Exception $ex){
            $response = false;
        }
        return json_encode($response);
    }
}
