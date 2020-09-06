<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTorresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('torres', function (Blueprint $table) {
            $table->bigIncrements('id_torre');
            $table->string('nombre_torre');
            $table->integer('opc_descubierta')->default(0);
            $table->integer('id_seccion')->default(7);
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
        Schema::dropIfExists('torres');
    }
}
