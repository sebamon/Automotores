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
            $table->id('asignacionVehiculo_id');
            $table->unsignedBigInteger('vehiculo_id')->nullable();
            $table->unsignedBigInteger('area_id')->nullable();
            $table->unsignedBigInteger('unidad_id')->nullable();
            $table->foreign('area_id')->references('areaAsignacion_id')->on('areaAsignacion'); // clave foranea
            $table->foreign('unidad_id')->references('unidadNegocio_id')->on('unidadNegocio'); // clave foranea
            $table->foreign('vehiculo_id')->references('vehiculo_id')->on('vehiculos'); // clave foranea
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
