<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Estudiante>
 */
class EstudianteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'cuenta' => $this->faker->name(),
            'nombre' => $this->faker->lastName(),
            'apellido'=> $this->faker->lastName(),
            'sexo'=> $this->faker->lastName(),
            'carrera'=> $this->faker->lastName(),
            'created_by'=>1
            
        ];
    }
}
