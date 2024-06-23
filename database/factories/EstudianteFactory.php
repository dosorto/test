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
    protected $model = \App\Models\Estudiante::class;
    public function definition(): array
    {
        return [
            'cuenta' => $this->faker->numerify("#############"), 
            'nombre' => $this->faker->name(),
            'apellido' => $this->faker->lastName(),
            'sexo'=> $this->faker->lastName(),
            'carrera'=> $this->faker->text(),
            'created_by'=>1
        ];
    }
}