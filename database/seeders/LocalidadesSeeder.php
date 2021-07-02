<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LocalidadesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('localidades')->insert([
            'provincia_id' => 1,
            'localidad'=>'Allen',
        ]);
        DB::table('localidades')->insert([
            'provincia_id' => 1,
            'localidad'=>'Barda Del Medio',
        ]);
        DB::table('localidades')->insert([
            'provincia_id' => 1,
            'localidad'=>'San Carlos de Bariloche',
        ]);
        DB::table('localidades')->insert([
            'provincia_id' => 1,
            'localidad'=>'Catriel',
        ]);
        DB::table('localidades')->insert([
            'provincia_id' => 1,
            'localidad'=>'Chichinales',
        ]);
        DB::table('localidades')->insert([
            'provincia_id' => 1,
            'localidad'=>'Chimpay',
        ]);
        DB::table('localidades')->insert([
            'provincia_id' => 1,
            'localidad'=>'Choele Choel',
        ]);
        DB::table('localidades')->insert([
            'provincia_id' => 1,
            'localidad'=>'Cinco Saltos',
        ]);
        DB::table('localidades')->insert([
            'provincia_id' => 1,
            'localidad'=>'Cipolletti',
        ]);
        DB::table('localidades')->insert([
            'provincia_id' => 1,
            'localidad'=>'Dina Huapi',
        ]);
        DB::table('localidades')->insert([
            'provincia_id' => 1,
            'localidad'=>'General Conesa',
        ]);
        DB::table('localidades')->insert([
            'provincia_id' => 1,
            'localidad'=>'General Roca',
        ]);
        DB::table('localidades')->insert([
            'provincia_id' => 1,
            'localidad'=>'Ingeniero Jacobacci',
        ]);
        DB::table('localidades')->insert([
            'provincia_id' => 1,
            'localidad'=>'Rio Colorado',
        ]);
        DB::table('localidades')->insert([
            'provincia_id' => 1,
            'localidad'=>'San Antonio Oeste',
        ]);
        DB::table('localidades')->insert([
            'provincia_id' => 1,
            'localidad'=>'Sierra Grande',
        ]);
        DB::table('localidades')->insert([
            'provincia_id' => 1,
            'localidad'=>'Valcheta',
        ]);
        DB::table('localidades')->insert([
            'provincia_id' => 1,
            'localidad'=>'Viedma',
        ]);
        DB::table('localidades')->insert([
            'provincia_id' => 1,
            'localidad'=>'Villa Regina',
        ]);
        DB::table('localidades')->insert([
            'provincia_id' => 2,
            'localidad'=>'Arroyito',
        ]);
        DB::table('localidades')->insert([
            'provincia_id' => 2,
            'localidad'=>'Centenario',
        ]);
        DB::table('localidades')->insert([
            'provincia_id' => 2,
            'localidad'=>'Colonia Valentina',
        ]);
        DB::table('localidades')->insert([
            'provincia_id' => 2,
            'localidad'=>'Neuquén',
        ]);
        DB::table('localidades')->insert([
            'provincia_id' => 2,
            'localidad'=>'Picun Leufu',
        ]);
        DB::table('localidades')->insert([
            'provincia_id' => 2,
            'localidad'=>'Piedra Del Aguila',
        ]);
        DB::table('localidades')->insert([
            'provincia_id' => 2,
            'localidad'=>'Plottier',
        ]);
        DB::table('localidades')->insert([
            'provincia_id' => 2,
            'localidad'=>'Senillosa',
        ]);
        DB::table('localidades')->insert([
            'provincia_id' => 3,
            'localidad'=>'Avellaneda',
        ]);
        DB::table('localidades')->insert([
            'provincia_id' => 3,
            'localidad'=>'Azul',
        ]);
        DB::table('localidades')->insert([
            'provincia_id' => 3,
            'localidad'=>'Bahia Blanca',
        ]);
        DB::table('localidades')->insert([
            'provincia_id' => 3,
            'localidad'=>'Carmen De Patagones',
        ]);
        DB::table('localidades')->insert([
            'provincia_id' => 3,
            'localidad'=>'Monte Grande',
        ]);
        DB::table('localidades')->insert([
            'provincia_id' => 3,
            'localidad'=>'Olavarria',
        ]);
        DB::table('localidades')->insert([
            'provincia_id' => 3,
            'localidad'=>'Capital Federal',
        ]);
        DB::table('localidades')->insert([
            'provincia_id' => 3,
            'localidad'=>'Pilar',
        ]);
        DB::table('localidades')->insert([
            'provincia_id' => 4,
            'localidad'=>'Córdoba',
        ]);
        DB::table('localidades')->insert([
            'provincia_id' => 5,
            'localidad'=>'San Rafael',
        ]);
        DB::table('localidades')->insert([
            'provincia_id' => 5,
            'localidad'=>'Mendoza',
        ]);
        DB::table('localidades')->insert([
            'provincia_id' => 6,
            'localidad'=>'Santa Rosa',
        ]);
        DB::table('localidades')->insert([
            'provincia_id' => 6,
            'localidad'=>'Victorica',
        ]);

    }
}
