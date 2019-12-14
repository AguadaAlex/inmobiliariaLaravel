<?php

use App\Tipo;
use Illuminate\Database\Seeder;

class TiposTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tipo::create([
            'nombre' => 'Casa'
        ]);
        Tipo::create([
            'nombre' => 'Departamento'
        ]);
        Tipo::create([
            'nombre' => 'Local'
        ]);
        Tipo::create([
            'nombre' => 'Galpón'
        ]);
        Tipo::create([
            'nombre' => 'Quinta'
        ]);
        Tipo::create([
            'nombre' => 'Terreno'
        ]);
    }
}
