<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Factura_Cab_Combustible extends Model
{
    protected $table='facturas_cab_combustible';

    protected $primaryKey='idFactura';
    protected $fillable= array('nroFactura','fecha','hora','tarjeta','idConductor','idProveedor','idVehiculo','idCentroCosto','remito');
    protected $hidden = ['created_at','updated_at'];
    use HasFactory;

    public function detalle()
    {
        return $this->hasMany('App\Models\Factura_Det_Combustible');
    }
}
