<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableEstablecimientosMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('establecimientos', function (Blueprint $table) {
            $table->id('idEstablecimiento');
            $table->unsignedBigInteger('idLocalidad');
            $table->text('razonSocial');
            $table->text('bandera');
            $table->text('direccion');
            $table->foreign('idLocalidad')->references('idLocalidad')->on('localidades'); // clave foranea
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
        Schema::dropIfExists('establecimientos');
    }
}
