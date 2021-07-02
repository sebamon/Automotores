<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Provincia extends Model
{
    protected $table='provincias';

    protected $primaryKey='provincia_id';
    protected $fillable= array('provincia');
    protected $hidden = ['created_at','updated_at'];
    use HasFactory;
}
