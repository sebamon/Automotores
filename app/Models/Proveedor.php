<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proveedor extends Model
{
    protected $table='proveedores';

    protected $primaryKey='idProveedor';
    protected $fillable= array('proveedor');
    protected $hidden = ['created_at','updated_at'];
    use HasFactory;
}
