<?php

namespace App\Providers;

use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use App\Secciones;
use View;

class SeccionesServiceProvider extends ServiceProvider{

    public function boot(){
        View::composer('layouts.app', function($view){
            $secciones = Secciones::where('opc_activa', '=', 1)->get();
            $view->with('secciones', $secciones);
        });
    }
}