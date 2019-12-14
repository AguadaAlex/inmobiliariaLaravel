<?php

use App\Localidad;
use Illuminate\Database\Seeder;

class LocalidadesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Localidad::create([
            'nombre' => 'Berazategui'
        ]);
        Localidad::create([
            'nombre' => 'Quilmes'
        ]);
        Localidad::create([
            'nombre' => 'Avellaneda'
        ]);
        Localidad::create([
            'nombre' => 'La Plata'
        ]);
        Localidad::create([
            'nombre' => 'Capital Federal'
        ]);
        Localidad::create([
            'nombre' => 'Palermo'
        ]);
    }
}
