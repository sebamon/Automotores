<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Localidad extends Model
{
    protected $table='localidades';

    protected $primaryKey='localidad_id';
    protected $fillable= array('provincia_id','localidad');
    protected $hidden = ['created_at','updated_at'];
    use HasFactory;
}
