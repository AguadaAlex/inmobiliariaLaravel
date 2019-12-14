<?php

use App\Galeria;
use Illuminate\Database\Seeder;

class GaleriasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Galeria::create([
            'galeria_id' => '1',
            'imagen'=>'casaGale1-1.jpg',
            'descripcion'=>'casa hermosa'
        ]);
        Galeria::create([
            'galeria_id' => '1',
            'imagen'=>'casaGale1-2.jpg',
            'descripcion'=>'casa hermosa'
        ]);
        Galeria::create([
            'galeria_id' => '1',
            'imagen'=>'casaGale1-3.jpg',
            'descripcion'=>'casa hermosa'
        ]);
        Galeria::create([
            'galeria_id' => '1',
            'imagen'=>'casaGale1-4.jpg',
            'descripcion'=>'casa hermosa'
        ]);
        Galeria::create([
            'galeria_id' => '1',
            'imagen'=>'casaGale1-5.jpg',
            'descripcion'=>'casa hermosa'
        ]);
        Galeria::create([
            'galeria_id' => '2',
            'imagen'=>'casa1.jpg',
            'descripcion'=>'pepe'
        ]);
        Galeria::create([
            'galeria_id' => '3',
            'imagen'=>'casaiii.jpg',
            'descripcion'=>'pepe'
        ]);
    }
}
