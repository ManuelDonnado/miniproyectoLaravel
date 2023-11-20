<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CursoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('cursos')->insert([
            [
                'nombreCurso' => 'Ingles',
            ],
            [
                'nombreCurso' => 'Matematicas',
            ],
            [
                'nombreCurso' => 'Español',
            ],
            [
                'nombreCurso' => 'Quimica',
            ],
            [
                'nombreCurso' => 'Fisica',
            ],
            [
                'nombreCurso' => 'Literatura',
            ],
            [
                'nombreCurso' => 'Ciencias Sociales',
            ],
            [
                'nombreCurso' => 'Informatica',
            ],
            [
                'nombreCurso' => 'Artisticas',
            ],
            [
                'nombreCurso' => 'Biologia',
            ],
        ]);
    }
}
