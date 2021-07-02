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
            $table->bigIncrements('facturaCab_id');
            $table->text('nroFactura');
            $table->date('fecha');
            $table->time('hora');
            $table->text('tarjeta'); //Pasar a tabla
            $table->unsignedBigInteger('conductor_id');
            $table->unsignedBigInteger('proveedor_id');
            $table->unsignedBigInteger('vehiculo_id');
            $table->unsignedBigInteger('centroCosto_id');
            $table->string('remito');
           // $table->primary('idFactura');
            $table->foreign('conductor_id')->references('conductor_id')->on('conductores'); // clave foranea
            $table->foreign('proveedor_id')->references('proveedor_id')->on('proveedores'); // clave foranea
            $table->foreign('vehiculo_id')->references('vehiculo_id')->on('vehiculos'); // clave foranea
            $table->foreign('centroCosto_id')->references('centroCosto_id')->on('centros_costo'); // clave foranea
            
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
