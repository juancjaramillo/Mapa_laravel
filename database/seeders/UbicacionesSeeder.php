<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Ubicacion;

class UbicacionesSeeder extends Seeder
{
    public function run()
    {
        // Agrega los datos de ubicaciones
        $ubicaciones = [
            [
                'nombre' => 'Ubicación 1',
                'latitud' => 51.505,
                'longitud' => -0.09,
            ],
            [
                'nombre' => 'Ubicación 2',
                'latitud' => 52.5,
                'longitud' => -1.9,
            ],
            // Agrega más ubicaciones según tus necesidades
        ];

        // Crea los registros en la base de datos
        foreach ($ubicaciones as $ubicacion) {
            Ubicacion::create($ubicacion);
        }
    }
}
