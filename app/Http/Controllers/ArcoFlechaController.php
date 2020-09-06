<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ArcoFlecha;

class ArcoFlechaController extends Controller
{
    public static function index(){
        $arcos_flechas = ArcoFlecha::all();
        return View('pantallas.arco_flecha');
    }

    public static function filtrarDatos(Request $request){
        $datos = array();

        try{
            if($request->opcion == 0){
                $datos = ArcoFlecha::all();
            }else{
                $datos = ArcoFlecha::where('opc_tipo', '=', $request->opcion)->get();
            }
        }catch(Exception $ex){
            $datos = [];
        }

        return json_encode($datos);
    }

    public static function actualizarRegistro(Request $request){
        $response = null;

        try{
            $arco_flecha = ArcoFlecha::findOrFail($request->id_arco_flecha);
            $arco_flecha->opc_obtenido = $request->opc_obtenido;
            $arco_flecha->save();
            $response = true;
        }catch(Exception $ex){
            $response = false;
        }

        return json_encode($response);
    }


}
