<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Establecimiento extends Model
{
    protected $table='establecimientos';

    protected $primaryKey='establecimiento_id';
    protected $fillable= array('localidad_id','razonSocial','bandera','direccion');
    protected $hidden = ['created_at','updated_at'];
    use HasFactory;
}
