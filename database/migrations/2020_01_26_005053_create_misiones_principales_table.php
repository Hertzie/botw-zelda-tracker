<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMisionesPrincipalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('principales', function (Blueprint $table) {
            $table->bigIncrements('id_principal');
            $table->string('nombre_mision');
            $table->integer('opc_completada')->default(0);
            $table->integer('id_seccion')->default(2);
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
        Schema::dropIfExists('principales');
    }
}
