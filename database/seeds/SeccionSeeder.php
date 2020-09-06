<?php

use Illuminate\Database\Seeder;
use App\Secciones;

class SeccionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('secciones')->delete();

        $objetos = [
            ['id_seccion' => 1, 'nombre_seccion' => 'Lugares', 'opc_activa' => 1, 'ruta' => 'lugar', 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => NULL],
            ['id_seccion' => 2, 'nombre_seccion' => 'Misiones Principales', 'opc_activa' => 1, 'ruta' => 'principal', 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => NULL],
            ['id_seccion' => 3, 'nombre_seccion' => 'Misiones Secundarias', 'opc_activa' => 1, 'ruta' => 'secundaria', 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => NULL],
            ['id_seccion' => 4, 'nombre_seccion' => 'Santuarios', 'opc_activa' => 1, 'ruta' => 'santuario', 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => NULL],
            ['id_seccion' => 5, 'nombre_seccion' => 'Recuerdos', 'opc_activa' => 1, 'ruta' => 'recuerdo', 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => NULL],
            ['id_seccion' => 6, 'nombre_seccion' => 'Compendium', 'opc_activa' => 1, 'ruta' => 'compendium', 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => NULL],
            ['id_seccion' => 7, 'nombre_seccion' => 'Torres', 'opc_activa' => 1, 'ruta' => 'torre', 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => NULL],
            ['id_seccion' => 8, 'nombre_seccion' => 'Medallas', 'opc_activa' => 1, 'ruta' => 'medalla', 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => NULL],
            ['id_seccion' => 9, 'nombre_seccion' => 'Armas', 'opc_activa' => 1, 'ruta' => 'arma', 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => NULL],
            ['id_seccion' => 11, 'nombre_seccion' => 'Armaduras', 'opc_activa' => 1, 'ruta' => 'armadura', 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => NULL],
            ['id_seccion' => 12, 'nombre_seccion' => 'Criaturas', 'opc_activa' => 1, 'ruta' => 'criatura', 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => NULL],
            ['id_seccion' => 13, 'nombre_seccion' => 'Monstruos', 'opc_activa' => 1, 'ruta' => 'monstruo', 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => NULL],
            ['id_seccion' => 14, 'nombre_seccion' => 'Materiales', 'opc_activa' => 1, 'ruta' => 'material', 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => NULL],
            ['id_seccion' => 15, 'nombre_seccion' => 'Arcos y Flechas', 'opc_activa' => 1, 'ruta' => 'arco_flecha', 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => NULL],
            ['id_seccion' => 16, 'nombre_seccion' => 'Escudos', 'opc_activa' => 1, 'ruta' => 'escudos', 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => NULL]
        ];

        foreach($objetos as $obj){
            Secciones::create($obj);
        }
    }
}
