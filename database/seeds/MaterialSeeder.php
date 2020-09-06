<?php

use Illuminate\Database\Seeder;
use App\Material;

class MaterialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('materiales')->delete();

        $materiales = [
            ['id_material' => 1, 'nombre_material' => 'Apple', 'opc_obtenido' => 0, 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => NULL],
            ['id_material' => 2, 'nombre_material' => 'Palm Fruit', 'opc_obtenido' => 0, 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => NULL],
            ['id_material' => 3, 'nombre_material' => 'Wildberry', 'opc_obtenido' => 0, 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => NULL],
            ['id_material' => 4, 'nombre_material' => 'Hearty Durian', 'opc_obtenido' => 0, 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => NULL],
            ['id_material' => 5, 'nombre_material' => 'Hydromelon', 'opc_obtenido' => 0, 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => NULL],
            ['id_material' => 6, 'nombre_material' => 'Spicy Pepper', 'opc_obtenido' => 0, 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => NULL],
            ['id_material' => 7, 'nombre_material' => 'Voltfruit', 'opc_obtenido' => 0, 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => NULL],
            ['id_material' => 8, 'nombre_material' => 'Fleet-lotus Seeds', 'opc_obtenido' => 0, 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => NULL],
            ['id_material' => 9, 'nombre_material' => 'Mighty Bananas', 'opc_obtenido' => 0, 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => NULL],
            ['id_material' => 10, 'nombre_material' => 'Hylian Shroom', 'opc_obtenido' => 0, 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => NULL],
            ['id_material' => 11, 'nombre_material' => 'Endura Shroom', 'opc_obtenido' => 0, 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => NULL],
            ['id_material' => 12, 'nombre_material' => 'Stamella Shroom', 'opc_obtenido' => 0, 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => NULL],
            ['id_material' => 13, 'nombre_material' => 'Hearty Truffle', 'opc_obtenido' => 0, 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => NULL],
            ['id_material' => 14, 'nombre_material' => 'Big Hearty Truffle', 'opc_obtenido' => 0, 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => NULL],
            ['id_material' => 15, 'nombre_material' => 'Chillshroom', 'opc_obtenido' => 0, 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => NULL],
            ['id_material' => 16, 'nombre_material' => 'Sunshroom', 'opc_obtenido' => 0, 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => NULL],
            ['id_material' => 17, 'nombre_material' => 'Zapshroom', 'opc_obtenido' => 0, 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => NULL],
            ['id_material' => 18, 'nombre_material' => 'Rushshroom', 'opc_obtenido' => 0, 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => NULL],
            ['id_material' => 19, 'nombre_material' => 'Razorshroom', 'opc_obtenido' => 0, 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => NULL],
            ['id_material' => 20, 'nombre_material' => 'Ironshroom', 'opc_obtenido' => 0, 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => NULL],
            ['id_material' => 21, 'nombre_material' => 'Silent Shroom', 'opc_obtenido' => 0, 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => NULL],
            ['id_material' => 22, 'nombre_material' => 'Hyrule Herb', 'opc_obtenido' => 0, 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => NULL],
            ['id_material' => 23, 'nombre_material' => 'Hearty Radish', 'opc_obtenido' => 0, 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => NULL],
            ['id_material' => 24, 'nombre_material' => 'Big Hearty Radish', 'opc_obtenido' => 0, 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => NULL],
            ['id_material' => 25, 'nombre_material' => 'Cool Safflina', 'opc_obtenido' => 0, 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => NULL],
            ['id_material' => 26, 'nombre_material' => 'Warm Safflina', 'opc_obtenido' => 0, 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => NULL],
            ['id_material' => 27, 'nombre_material' => 'Electric Safflina', 'opc_obtenido' => 0, 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => NULL],
            ['id_material' => 28, 'nombre_material' => 'Swift Carrot', 'opc_obtenido' => 0, 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => NULL],
            ['id_material' => 29, 'nombre_material' => 'Endura Carrot', 'opc_obtenido' => 0, 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => NULL],
            ['id_material' => 30, 'nombre_material' => 'Fortified Pumpkin', 'opc_obtenido' => 0, 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => NULL],
            ['id_material' => 31, 'nombre_material' => 'Swift Violet', 'opc_obtenido' => 0, 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => NULL],
            ['id_material' => 32, 'nombre_material' => 'Mighty Thistle', 'opc_obtenido' => 0, 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => NULL],
            ['id_material' => 33, 'nombre_material' => 'Armoranth', 'opc_obtenido' => 0, 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => NULL],
            ['id_material' => 34, 'nombre_material' => 'Blue Nightshade', 'opc_obtenido' => 0, 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => NULL],
            ['id_material' => 35, 'nombre_material' => 'Silent Princess', 'opc_obtenido' => 0, 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => NULL],
            ['id_material' => 36, 'nombre_material' => 'Courser Bee Honey', 'opc_obtenido' => 0, 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => NULL]
        ];

        foreach($materiales as $material){
            Material::create($material);
        }
    }
}
