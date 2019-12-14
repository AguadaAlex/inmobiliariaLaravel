<?php

use App\Caracteristica;
use Illuminate\Database\Seeder;

class CaracteristicasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Caracteristica::create([
            'nombre' => 'Cocina'
        ]);
        Caracteristica::create([
            'nombre' => 'Comedor'
        ]);
        Caracteristica::create([
            'nombre' => 'Living Comedor'
        ]);
        Caracteristica::create([
            'nombre' => 'Garage'
        ]);
    }
}
