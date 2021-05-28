<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Conductor extends Model
{
    protected $table='conductores';

    protected $primaryKey='idConductor';
    protected $fillable= array('nombre','apellido','dni');
    protected $hidden = ['created_at','updated_at'];
    use HasFactory;
}
