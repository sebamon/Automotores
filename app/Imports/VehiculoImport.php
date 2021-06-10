<?php

namespace App\Imports;

use App\Models\Vehiculo;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\Importable;
use Maatwebsite\Excel\Concerns\WithHeadingRow ;

class VehiculoImport implements ToModel,WithHeadingRow 
{
    use Importable;
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Vehiculo([
            'dominio'     => $row['dominio'],
            'descripcion'    => $row['descripcion'], 
            'nroChasis' => $row['nrochasis'],
            'nroMotor' => $row['nromotor'],
            'modelo' => $row['modelo'],
            'tipo' => $row['tipo'],
            'estadoPropiedad' => $row['estadopropiedad'],
            'combustible' => $row['combustible'],
            'estadoPloteo' => $row['estadoploteo'],
        ]);
        
    }
}
