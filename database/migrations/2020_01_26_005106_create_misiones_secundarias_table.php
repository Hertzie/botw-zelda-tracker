<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMisionesSecundariasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('secundarias', function (Blueprint $table) {
            $table->bigIncrements('id_secundaria');
            $table->string('nombre_mision');
            $table->integer('opc_completada')->default(0);
            $table->integer('id_seccion')->default(3);
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
        Schema::dropIfExists('secundarias');
    }
}
