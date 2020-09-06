<?php

use Illuminate\Database\Seeder;
use App\Torre;

class TorreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('torres')->delete();

        $objetos = [
            ['id_torre' => 1, 'nombre_torre' => 'Torre de Akkala', 'opc_descubierta' => 0, 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => NULL],
            ['id_torre' => 2, 'nombre_torre' => 'Torre Central', 'opc_descubierta' => 0, 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => NULL],
            ['id_torre' => 3, 'nombre_torre' => 'Torre de Dueling Peaks', 'opc_descubierta' => 0, 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => NULL],
            ['id_torre' => 4, 'nombre_torre' => 'Torre de Eldin', 'opc_descubierta' => 0, 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => NULL],
            ['id_torre' => 5, 'nombre_torre' => 'Torre de Faron', 'opc_descubierta' => 0, 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => NULL],
            ['id_torre' => 6, 'nombre_torre' => 'Torre Gerudo', 'opc_descubierta' => 0, 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => NULL],
            ['id_torre' => 7, 'nombre_torre' => 'Torre de la Meseta', 'opc_descubierta' => 0, 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => NULL],
            ['id_torre' => 8, 'nombre_torre' => 'Torre de Hateno', 'opc_descubierta' => 0, 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => NULL],
            ['id_torre' => 9, 'nombre_torre' => 'Torre de Hebra', 'opc_descubierta' => 0, 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => NULL],
            ['id_torre' => 10, 'nombre_torre' => 'Torre del Lago', 'opc_descubierta' => 0, 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => NULL],
            ['id_torre' => 11, 'nombre_torre' => 'Torre de Lanayru', 'opc_descubierta' => 0, 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => NULL],
            ['id_torre' => 12, 'nombre_torre' => 'Torre Ridgeland', 'opc_descubierta' => 0, 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => NULL],
            ['id_torre' => 13, 'nombre_torre' => 'Torre de Tabantha', 'opc_descubierta' => 0, 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => NULL],
            ['id_torre' => 14, 'nombre_torre' => 'Torre Woodland', 'opc_descubierta' => 0, 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => NULL],
            ['id_torre' => 15, 'nombre_torre' => 'Torre Wasteland', 'opc_descubierta' => 0, 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => NULL],
        ];

        foreach ($objetos as $obj){
            Torre::create($obj);
        }
    }
}
