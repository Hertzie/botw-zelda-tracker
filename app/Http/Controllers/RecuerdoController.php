<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Recuerdo;

class RecuerdoController extends Controller
{
    public function index(){
        $recuerdos = Recuerdo::all();
        return View('pantallas.recuerdos', compact('recuerdos'));
    }

    public function actualizarRegistro(Request $request){
        $response = null;

        try{
            $recuerdo = Recuerdo::findOrFail($request->id_recuerdo);
            $recuerdo->opc_encontrado = $request->opc_encontrado;
            $recuerdo->save();
            $response = true;
        }catch(Exception $ex){
            $response = false;
        }

        return json_encode($response);
    }
}
