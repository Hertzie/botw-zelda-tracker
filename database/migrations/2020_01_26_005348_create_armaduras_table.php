<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArmadurasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('armaduras', function (Blueprint $table) {
            $table->bigIncrements('id_armadura');
            $table->string('nombre_medalla');
            $table->integer('opc_obtenida')->default(0);
            $table->integer('id_seccion')->default(11);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('armaduras');
    }
}
