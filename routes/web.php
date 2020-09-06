<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Rutas de controllers

//Lugares
Route::group(['prefix' => 'lugar', 'as' => 'lugar'], function(){
    Route::get('/', 'LugarController@index');
});

// //Misiones Principales
Route::group(['prefix' => 'principal', 'as' => 'principal'], function(){
    Route::get('/', 'PrincipalController@index');
});

// //Misiones Secundarias
Route::group(['prefix' => 'secundaria', 'as' => 'secundaria'], function(){
    Route::get('/', 'SecundariaController@index');
});

// //Santuarios
Route::group(['prefix' => 'santuario', 'as' => 'santuario'], function(){
    Route::get('/', 'SantuarioController@index');
});

// //Recuerdos
Route::group(['prefix' => 'recuerdo', 'as' => 'recuerdo'], function(){
    Route::get('/', 'RecuerdoController@index');
    Route::put('/', 'RecuerdoController@actualizarRegistro');
});

// //Torres
Route::group(['prefix' => 'torre', 'as' => 'torre'], function(){
    Route::get('/', 'TorreController@index');
    Route::post('/', 'TorreController@cambiarEstatusTorre');
});

// //Medallas
Route::group(['prefix' => 'medalla', 'as' => 'medalla'], function(){
    Route::get('/', 'MedallaController@index');
    Route::post('/', 'MedallaController@cambiarEstatusMedalla');
});

// //Armaduras
Route::group(['prefix' => 'armadura', 'as' => 'armadura'], function(){
    Route::get('/', 'ArmaduraController@index');
});

//Configuraciones
Route::group(['prefix' => 'configuracion', 'as' => 'configuracion'], function(){
    Route::get('/', 'ConfiguracionController@index');
    Route::post('/', 'ConfiguracionController@cambiarEstatusSeccion');
});

//Arco Flecha
Route::group(['prefix' => 'arco_flecha', 'as' => 'arco_flecha'], function(){
    Route::get('/', 'ArcoFlechaController@index');
    Route::post('/', 'ArcoFlechaController@filtrarDatos');
    Route::put('/', 'ArcoFlechaController@actualizarRegistro');
});

//Materiales
Route::group(['prefix' => 'material', 'as' => 'material'], function(){
    Route::get('/', 'MaterialController@index');
    Route::post('/', 'MaterialController@filtrarPor');
    Route::put('/', 'MaterialController@actualizarRegistro');
});

//Estadísticas
Route::get('/estadisticas', 'EstadisticasController@index')->name('estadisticas');

