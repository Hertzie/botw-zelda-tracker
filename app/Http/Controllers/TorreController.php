<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Torre;

class TorreController extends Controller
{
    public static function index(){
        $torres = Torre::all();
        return View('pantallas.torres', compact('torres'));
    }

    public static function cambiarEstatusTorre(Request $request){
        $response = null;

        try{
            $torre = Torre::findOrFail($request->id_torre);
            $torre->opc_descubierta = $request->opc_descubierta;
            $torre->save();
            $response = true;
        }catch(Exception $ex){
            $response = false;
        }

        return json_encode($response);
    }
}