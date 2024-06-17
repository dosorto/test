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
        Persona::factory()->count(50000)->create();
        // Persona::create([
        //     'nombre'=>"María",
        //     'apellido'=>"Lopez",
        //     'identidad'=>"123"] 
        // );
        // Persona::create([
        //     'nombre'=>"María",
        //     'apellido'=>"Lopez",
        //     'identidad'=>"123"] 
        // );
        // Persona::create([
        //     'nombre'=>"María",
        //     'apellido'=>"Lopez",
        //     'identidad'=>"123"] 
        // );
        
    }
}
