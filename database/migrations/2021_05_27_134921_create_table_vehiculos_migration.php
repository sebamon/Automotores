<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableVehiculosMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehiculos', function (Blueprint $table) {
            $table->id('vehiculo_id');
            $table->string('dominio');
            $table->string('descripcion');
            $table->string('nroChasis');
            $table->string('nroMotor');
            $table->integer('modelo');
            $table->string('tipo');
            $table->string('estadoPropiedad');
            $table->string('combustible');//normalizar?
            $table->string('estadoPloteo');
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
        Schema::dropIfExists('vehiculos');
    }
}
