<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Material;

class MaterialController extends Controller
{
    public function index(){
        $materiales = Material::all();
        return View('pantallas.materiales', compact('materiales'));
    }

    public function filtrarPor(Request $request){
        $datos = array();

        try{
            if($request->filtrado == ""){
                $datos = Material::all();
            }else{
                $datos = Material::where('nombre_material', 'like', '%' . $request->filtrado . '%')->get();
            }
        }catch(Exception $ex){
            $datos = [];
        }

        return json_encode($datos);
    }

    public function actualizarRegistro(Request $request){
        $response = null;

        try{
            $material = Material::findOrFail($request->id_material);
            $material->opc_obtenido = $request->opc_obtenido;
            $material->save();
            $response = true;
        }catch(Exception $ex){
            $response = false;
        }
    }
}
