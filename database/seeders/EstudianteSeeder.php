<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Estudiante;

class EstudianteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Estudiante::factory()->count(200)->create();
    }
}
