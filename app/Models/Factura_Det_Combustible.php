<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Factura_Det_Combustible extends Model
{
    protected $table='facturas_det_combustible';

    protected $primaryKey=['facturaCab_id','facturaDetalle_id'];
    protected $fillable= array('producto','litros','precio','iva');
    protected $hidden = ['created_at','updated_at'];
    use HasFactory;

    public function cabecera()
    {
        return $this->belongTo('App\Models\Factura_Cab_Combustible');
    }
}
