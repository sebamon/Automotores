<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableFacturasCabCombustibleMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('facturas_cab_combustible', function (Blueprint $table) {
            $table->bigIncrements('idFactura');
            $table->text('nroFactura');
            $table->date('fecha');
            $table->time('hora');
            $table->text('tarjeta'); //Pasar a tabla
            $table->unsignedBigInteger('idConductor');
            $table->unsignedBigInteger('idProveedor');
            $table->unsignedBigInteger('idVehiculo');
            $table->unsignedBigInteger('idCentroCosto');
            $table->string('remito');
           // $table->primary('idFactura');
            $table->foreign('idConductor')->references('idConductor')->on('conductores'); // clave foranea
            $table->foreign('idProveedor')->references('idProveedor')->on('proveedores'); // clave foranea
            $table->foreign('idVehiculo')->references('idVehiculo')->on('vehiculos'); // clave foranea
            $table->foreign('idCentroCosto')->references('idCentroCosto')->on('centros_costo'); // clave foranea
            
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
        Schema::dropIfExists('facturas_cab_combustible');
    }
}
