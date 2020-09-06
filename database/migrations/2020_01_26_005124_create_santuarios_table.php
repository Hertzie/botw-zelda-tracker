<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSantuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('santuarios', function (Blueprint $table) {
            $table->bigIncrements('id_santuario');
            $table->string('nombre_santuario');
            $table->integer('opc_completado')->default(0);
            $table->integer('id_seccion')->default(4);
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
        Schema::dropIfExists('santuarios');
    }
}
