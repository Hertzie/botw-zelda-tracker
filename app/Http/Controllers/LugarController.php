<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Lugar;

class LugarController extends Controller
{
    public function index(){
        $lugares = Lugar::all();
        return View('pantallas.lugares', compact('lugares'));
    }
}
