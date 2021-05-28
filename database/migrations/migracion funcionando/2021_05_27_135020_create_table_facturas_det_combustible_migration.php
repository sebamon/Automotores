<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableFacturasDetCombustibleMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::dropIfExists('facturas_det_combustible');
        Schema::create('facturas_det_combustible', function (Blueprint $table) {
            $table->unsignedBigInteger('idFactura');
            $table->unsignedInteger('idDetalleFactura');
            
            $table->text('producto');// Pasar a otra tabla
            $table->float('litros',5,2);
            $table->float('precio',8,2);
            $table->float('iva',4,2);
           
            $table->foreign('idFactura')->references('idFactura')->on('facturas_cab_combustible'); // clave foranea
            $table->primary(['idFactura','idDetalleFactura']);
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
        Schema::dropIfExists('facturas_det_combustible');
    }
}
