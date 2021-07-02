<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Factura_Cab_Combustible extends Model
{
    protected $table='facturas_cab_combustible';

    protected $primaryKey='facturaCab_id';
    protected $fillable= array('nroFactura','fecha','hora','tarjeta','conductor_id','proveedor_id','vehiculo_id','centroCosto_id','remito');
    protected $hidden = ['created_at','updated_at'];
    use HasFactory;

    public function detalle()
    {
        return $this->hasMany('App\Models\Factura_Det_Combustible');
    }
}
