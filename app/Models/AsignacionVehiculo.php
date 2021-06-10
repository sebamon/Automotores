<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AsignacionVehiculo extends Model
{
    protected $table='asignacionesVehiculos';

    protected $primaryKey='idAsignacionVehiculo';
    protected $fillable= array('dominio','idArea','idUnidad');
    protected $hidden = ['created_at','updated_at'];
    use HasFactory;

}
