<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProvinciasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('provincias')->insert([
            'provincia'=>'Rio Negro',
        ]);
        DB::table('provincias')->insert([
            'provincia'=>'Neuquén',
        ]);
        DB::table('provincias')->insert([
            'provincia'=>'Buenos Aires',
        ]);
        DB::table('provincias')->insert([
            'provincia'=>'Córdoba',
        ]);
        DB::table('provincias')->insert([
            'provincia'=>'Mendoza',
        ]);
        DB::table('provincias')->insert([
            'provincia'=>'La Pampa',
        ]);
    }
}
