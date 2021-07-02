<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CentroCosto extends Model
{
    protected $table='centros_costo';

    protected $primaryKey='centroCosto_id';
    protected $fillable= array('centroCosto');
    protected $hidden = ['created_at','updated_at'];
    use HasFactory;

    public function factura()
    {
        return $this->belongTo('App\Models\Factura_Cab_Combustible');
    }
}
