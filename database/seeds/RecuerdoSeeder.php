<?php

use Illuminate\Database\Seeder;
use App\Recuerdo;

class RecuerdoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('recuerdos')->delete();

        $objetos = [
            ['id_recuerdo' => 1, 'nombre_recuerdo' => 'Subdued Memory', 'opc_encontrado' => 0, 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => NULL],
            ['id_recuerdo' => 2, 'nombre_recuerdo' => 'Resolve and Grief', 'opc_encontrado' => 0, 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => NULL],
            ['id_recuerdo' => 3, 'nombre_recuerdo' => 'Zeldas Resentment', 'opc_encontrado' => 0, 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => NULL],
            ['id_recuerdo' => 4, 'nombre_recuerdo' => 'Blades of the Yiga', 'opc_encontrado' => 0, 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => NULL],
            ['id_recuerdo' => 5, 'nombre_recuerdo' => 'A premonition', 'opc_encontrado' => 0, 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => NULL],
            ['id_recuerdo' => 6, 'nombre_recuerdo' => 'Silent Princess', 'opc_encontrado' => 0, 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => NULL],
            ['id_recuerdo' => 7, 'nombre_recuerdo' => 'Shelter from the storm', 'opc_encontrado' => 0, 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => NULL],
            ['id_recuerdo' => 8, 'nombre_recuerdo' => 'Father and daughter', 'opc_encontrado' => 0, 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => NULL],
            ['id_recuerdo' => 9, 'nombre_recuerdo' => 'Slumbering Power', 'opc_encontrado' => 0, 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => NULL],
            ['id_recuerdo' => 10, 'nombre_recuerdo' => 'To Mount Lanayru', 'opc_encontrado' => 0, 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => NULL],
            ['id_recuerdo' => 11, 'nombre_recuerdo' => 'Return of Calamity Ganon', 'opc_encontrado' => 0, 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => NULL],
            ['id_recuerdo' => 12, 'nombre_recuerdo' => 'Despair', 'opc_encontrado' => 0, 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => NULL],
            ['id_recuerdo' => 13, 'nombre_recuerdo' => 'Zeldas Awakening', 'opc_encontrado' => 0, 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => NULL],
        ];

        foreach($objetos as $obj){
            Recuerdo::create($obj);
        }
    }
}
