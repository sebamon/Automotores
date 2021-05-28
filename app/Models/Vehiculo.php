<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehiculo extends Model
{
    protected $table='vehiculos';

    protected $primaryKey='idVehiculo';
    protected $fillable= array('dominio','descripcion','nroChasis','nroMotor','modelo','tipo','estadoPropiedad','combustible','estadoPloteo');
    protected $hidden = ['created_at','updated_at'];
    use HasFactory;
}
