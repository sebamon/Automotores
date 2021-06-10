<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CrateTableAsignacionesVehiculosMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asignacionesVehiculos', function (Blueprint $table) {
            $table->id('idAsignacionVehiculo');
            $table->string('dominio');
            $table->unsignedBigInteger('idArea');
            $table->unsignedBigInteger('idUnidad');
            $table->foreign('idArea')->references('idAreaAsignacion')->on('areaAsignacion'); // clave foranea
            $table->foreign('idUnidad')->references('idUnidadNegocio')->on('unidadNegocio'); // clave foranea
            $table->foreign('dominio')->references('dominio')->on('vehiculos'); // clave foranea
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
        //
    }
}
