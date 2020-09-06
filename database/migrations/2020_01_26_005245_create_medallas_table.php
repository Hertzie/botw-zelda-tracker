<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMedallasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medallas', function (Blueprint $table) {
            $table->bigIncrements('id_medalla');
            $table->string('nombre_medalla');
            $table->integer('opc_obtenida')->default(0);
            $table->integer('id_seccion')->default(8);
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
        Schema::dropIfExists('medallas');
    }
}
