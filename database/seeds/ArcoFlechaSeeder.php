<?php

use Illuminate\Database\Seeder;
use App\ArcoFlecha;

class ArcoFlechaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('arcos_flechas')->delete();

        $objetos = [
            ['id_arco_flecha' => 1, 'nombre_arco_flecha' => 'Bow of Light', 'opc_obtenido' => 0, 'opc_tipo' => 1, 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => NULL],
            ['id_arco_flecha' => 2, 'nombre_arco_flecha' => 'Wooden Bow', 'opc_obtenido' => 0,  'opc_tipo' => 1, 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => NULL],
            ['id_arco_flecha' => 3, 'nombre_arco_flecha' => 'Travelers Bow', 'opc_obtenido' => 0, 'opc_tipo' => 1, 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => NULL],
            ['id_arco_flecha' => 4, 'nombre_arco_flecha' => 'Soldiers Bow', 'opc_obtenido' => 0, 'opc_tipo' => 1, 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => NULL],
            ['id_arco_flecha' => 5, 'nombre_arco_flecha' => 'Knights Bow', 'opc_obtenido' => 0, 'opc_tipo' => 1, 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => NULL],
            ['id_arco_flecha' => 6, 'nombre_arco_flecha' => 'Royal Bow','opc_obtenido' => 0, 'opc_tipo' => 1, 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => NULL],
            ['id_arco_flecha' => 7, 'nombre_arco_flecha' => 'Swallow Bow', 'opc_obtenido' => 0, 'opc_tipo' => 1, 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => NULL],
            ['id_arco_flecha' => 8, 'nombre_arco_flecha' => 'Forest Dwellers Bow', 'opc_obtenido' => 0, 'opc_tipo' => 1, 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => NULL],
            ['id_arco_flecha' => 9, 'nombre_arco_flecha' => 'Silver Bow', 'opc_obtenido' => 0, 'opc_tipo' => 1, 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => NULL],
            ['id_arco_flecha' => 10, 'nombre_arco_flecha' => 'Falcon Bow', 'opc_obtenido' => 0, 'opc_tipo' => 1, 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => NULL],
            ['id_arco_flecha' => 11, 'nombre_arco_flecha' => 'Great Eagle Bow', 'opc_obtenido' => 0, 'opc_tipo' => 1, 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => NULL],
            ['id_arco_flecha' => 12, 'nombre_arco_flecha' => 'Golden Bow', 'opc_obtenido' => 0, 'opc_tipo' => 1, 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => NULL],
            ['id_arco_flecha' => 13, 'nombre_arco_flecha' => 'Phrenic Bow', 'opc_obtenido' => 0, 'opc_tipo' => 1, 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => NULL],
            ['id_arco_flecha' => 14, 'nombre_arco_flecha' => 'Ancient Bow', 'opc_obtenido' => 0, 'opc_tipo' => 1, 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => NULL],
            ['id_arco_flecha' => 15, 'nombre_arco_flecha' => 'Royal Guards Bow', 'opc_obtenido' => 0, 'opc_tipo' => 1, 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => NULL],
            ['id_arco_flecha' => 16, 'nombre_arco_flecha' => 'Boko Bow', 'opc_obtenido' => 0, 'opc_tipo' => 1, 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => NULL],
            ['id_arco_flecha' => 17, 'nombre_arco_flecha' => 'Spiked Boko Bow', 'opc_obtenido' => 0, 'opc_tipo' => 1, 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => NULL],
            ['id_arco_flecha' => 18, 'nombre_arco_flecha' => 'Dragon Bow Boko Bow', 'opc_obtenido' => 0, 'opc_tipo' => 1, 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => NULL],
            ['id_arco_flecha' => 19, 'nombre_arco_flecha' => 'Lizal Bow', 'opc_obtenido' => 0, 'opc_tipo' => 1, 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => NULL],
            ['id_arco_flecha' => 20, 'nombre_arco_flecha' => 'Strengthened Lizal Bow', 'opc_obtenido' => 0, 'opc_tipo' => 1, 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => NULL],
            ['id_arco_flecha' => 21, 'nombre_arco_flecha' => 'Steel Lizal Bow', 'opc_obtenido' => 0, 'opc_tipo' => 1, 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => NULL],
            ['id_arco_flecha' => 22, 'nombre_arco_flecha' => 'Lynel Bow', 'opc_obtenido' => 0, 'opc_tipo' => 1, 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => NULL],
            ['id_arco_flecha' => 23, 'nombre_arco_flecha' => 'Mighty Lynel Bow', 'opc_obtenido' => 0, 'opc_tipo' => 1, 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => NULL],
            ['id_arco_flecha' => 24, 'nombre_arco_flecha' => 'Savage Lynel Bow', 'opc_obtenido' => 0, 'opc_tipo' => 1, 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => NULL],
            ['id_arco_flecha' => 25, 'nombre_arco_flecha' => 'Duplex Bow', 'opc_obtenido' => 0, 'opc_tipo' => 1, 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => NULL],
            ['id_arco_flecha' => 26, 'nombre_arco_flecha' => 'Arrow', 'opc_obtenido' => 0, 'opc_tipo' => 2, 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => NULL],
            ['id_arco_flecha' => 27, 'nombre_arco_flecha' => 'Fire Arrow', 'opc_obtenido' => 0, 'opc_tipo' => 2, 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => NULL],
            ['id_arco_flecha' => 28, 'nombre_arco_flecha' => 'Ice Arrow', 'opc_obtenido' => 0, 'opc_tipo' => 2, 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => NULL],
            ['id_arco_flecha' => 29, 'nombre_arco_flecha' => 'Shock Arrow', 'opc_obtenido' => 0, 'opc_tipo' => 2, 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => NULL],
            ['id_arco_flecha' => 30, 'nombre_arco_flecha' => 'Bomb Arrow', 'opc_obtenido' => 0, 'opc_tipo' => 2, 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => NULL],
            ['id_arco_flecha' => 31, 'nombre_arco_flecha' => 'Ancient Arrow', 'opc_obtenido' => 0, 'opc_tipo' => 2, 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => NULL],
        ];

        foreach($objetos as $obj){
            ArcoFlecha::create($obj);
        }
    }
}
