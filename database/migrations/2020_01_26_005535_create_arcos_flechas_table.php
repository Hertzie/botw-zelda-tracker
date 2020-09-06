<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArcosFlechasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('arcos_flechas', function (Blueprint $table) {
            $table->bigIncrements('id_arco_flecha');
            $table->string('nombre_arco_flecha');
            $table->integer('opc_obtenido')->default(0);
            $table->integer('id_seccion')->default(15);
            $table->integer('opc_tipo');
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
        Schema::dropIfExists('arcos_flechas');
    }
}
