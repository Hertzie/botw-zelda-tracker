<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRecuerdosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recuerdos', function (Blueprint $table) {
            $table->bigIncrements('id_recuerdo');
            $table->string('nombre_recuerdo');
            $table->integer('opc_encontrado')->default(0);
            $table->integer('id_seccion')->default(5);
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
        Schema::dropIfExists('recuerdos');
    }
}
