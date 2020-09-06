<?php

use Illuminate\Database\Seeder;
use App\Secundaria;

class SecundariaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('secundarias')->delete();

        $secundarias = [
            
        ];
    }
}
