<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCriaturasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('criaturas', function (Blueprint $table) {
            $table->bigIncrements('id_criatura');
            $table->string('nombre_criatura');
            $table->integer('opc_encontrada')->default(0);
            $table->integer('id_seccion')->default(12);
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
        Schema::dropIfExists('criaturas');
    }
}
