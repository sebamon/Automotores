<?php

namespace App\Imports;

use App\Models\AsignacionVehiculo;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\Importable;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class AsignacionVehiculoImport implements toModel
{
    use Importable;
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {

        $vehiculo = new Vehiculo;
        $unidad = new UnidadNegocio;
        $area = new AreaAsignacion;
        $vehiculo=Vehiculo::get()->where('dominio',$row['dominio']);

        $area=AreaAsignacion::get()->where('area',$row['area']);
        $unidad=UnidadNegocio::get()->where('unidadNegocio',$row['unidadNegocio']);

        }

        return new AsignacionVehiculo([
            'idUnidad' => $unidad->idUnidadNegocio,
            'idArea' => $area->idAreaAsignacion,
        ]);
    }
}
