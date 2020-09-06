<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(PrincipalSeeder::class);
        // $this->call(SecundariaSeeder::class);
        $this->call(ArcoFlechaSeeder::class);
        // $this->call(ArmaduraSeeder::class);
        // $this->call(ArmaSeeder::class);
        // $this->call(CriaturaSeeder::class);
        // $this->call(EscudoSeeder::class);
        // $this->call(LugarSeeder::class);
        $this->call(MaterialSeeder::class);
        $this->call(MedallaSeeder::class);
        // $this->call(MonstruoSeeder::class);
        $this->call(RecuerdoSeeder::class);
        // $this->call(SantuarioSeeder::class);
        $this->call(TorreSeeder::class);
        $this->call(SeccionSeeder::class);
    }
}
