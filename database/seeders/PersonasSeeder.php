<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Persona;

class PersonasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Persona::factory()->count(20)->create();
        // Persona::factory()->create([
        //     'identidad' => '123',
        //     'nombre' => 'Esdras',
        //     'apellido' => 'Castillo',
        // ]);
     //   Persona::create([
     //       'identidad' => '123',
     //       'nombre' => 'Esdras',
     //       'apellido' => 'Castillo',
      //  ]);
    }
}
