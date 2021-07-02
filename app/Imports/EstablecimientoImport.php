<?php

namespace App\Imports;

use App\Establecimiento;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow ;

class EstablecimientoImport implements ToModel,WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Establecimiento([
            'establecimiento_id' => $row['establecimiento_id'],
            'localidad_id' => $row['localidad_id'],
            'razonSocial' => $row['razonSocial'],
            'bandera' => $row['bandera'],
            'direccion' => $row['direccion'],
        ]);
    }
}
