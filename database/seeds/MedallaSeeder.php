<?php

use Illuminate\Database\Seeder;
use App\Medalla;

class MedallaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('medallas')->delete();

        $objetos = [
            ['id_medalla' => 1, 'nombre_medalla' => 'Medalla de Honor: Hinox', 'opc_obtenida' => 0, 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => NULL],
            ['id_medalla' => 2, 'nombre_medalla' => 'Medalla de Honor: Molduga', 'opc_obtenida' => 0, 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => NULL],
            ['id_medalla' => 3, 'nombre_medalla' => 'Medalla de Honor: Talus', 'opc_obtenida' => 0, 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => NULL],
        ];

        foreach($objetos as $obj){
            Medalla::create($obj);
        }
    }
}
