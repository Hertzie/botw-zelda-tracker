<?php

use Illuminate\Database\Seeder;
use App\Principal;

class PrincipalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('principales')->delete();

        $principales = [
            ['id_principal' => 1, 'nombre_mision' => 'La meseta de los albores', 'opc_completada' => 0, 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => NULL],
            ['id_principal' => 2, 'nombre_mision' => 'Habla con impa', 'opc_completada' => 0, 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => NULL],
            ['id_principal' => 3, 'nombre_mision' => 'Los recuerdos perdidos', 'opc_completada' => 0, 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => NULL],
            ['id_principal' => 4, 'nombre_mision' => 'La tribu de los zora: Bestia divina Vah Ruta', 'opc_completada' => 0, 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => NULL],
            ['id_principal' => 5, 'nombre_mision' => 'La tribu de las gerudo. Bestia divina Vah Naboris', 'opc_completada' => 0, 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => NULL],
            ['id_principal' => 6, 'nombre_mision' => 'La tribu de los orni. Bestia divina Vah Medoh', 'opc_completada' => 0, 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => NULL],
            ['id_principal' => 7, 'nombre_mision' => 'La tribu de los goron. Bestia divina Vah Rudania', 'opc_completada' => 0, 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => NULL],
            ['id_principal' => 8, 'nombre_mision' => 'La Espada Maestra', 'opc_completada' => 0, 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => NULL],
            ['id_principal' => 9, 'nombre_mision' => 'Derrota a Ganon', 'opc_completada' => 0, 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => NULL]
        ];

        foreach($principales as $principal){
            Principal::create($principal);
        }
    }
}
