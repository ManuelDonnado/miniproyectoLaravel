<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TipoAsistenciaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tipo_asistencias')->insert([
            [
                'tipoAsistencia' => 'Asistio Temprano',
            ],
            [
                'tipoAsistencia' => 'Asistio Tarde',
            ],
            [
                'tipoAsistencia' => 'Falto',
            ],
        ]);
    }
}
