<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Localidad extends Model
{
    protected $table='localidades';

    protected $primaryKey='idLocalidad';
    protected $fillable= array('idProvincia','localidad');
    protected $hidden = ['created_at','updated_at'];
    use HasFactory;
}
