<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMonstruosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('monstruos', function (Blueprint $table) {
            $table->bigIncrements('id_monstruo');
            $table->string('nombre_monstruo');
            $table->integer('opc_encontrado')->default(0);
            $table->integer('id_seccion')->default(13);
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
        Schema::dropIfExists('monstruos');
    }
}
