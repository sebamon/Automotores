<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UnidadNegocio extends Model
{

    protected $table='unidadNegocio';

    protected $primaryKey='unidadNegocio_id';
    protected $fillable= array('unidadNegocio');
    protected $hidden = ['created_at','updated_at'];
    use HasFactory;
}
