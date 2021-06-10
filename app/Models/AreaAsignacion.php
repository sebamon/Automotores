<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AreaAsignacion extends Model
{
    protected $table='areaAsignacion';

    protected $primaryKey='idAreaAsignacion';
    protected $fillable= array('area');
    protected $hidden = ['created_at','updated_at'];
    use HasFactory;
}
