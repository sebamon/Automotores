<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AsignacionVehiculo extends Model
{
    protected $table='asignacionesVehiculos';

    protected $primaryKey='asignacionVehiculo_id';
    protected $fillable= array('dominio','area_id','unidad_id');
    protected $hidden = ['created_at','updated_at'];
    use HasFactory;

    public function vehiculo()
    {
        return $this->hasOne(Vehiculo::class,'vehiculo_id','vehiculo_id');
    }
}
