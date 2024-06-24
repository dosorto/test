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
            'cuenta' => $this->faker->word,
            'nombre' => $this->faker->word,
            'apellido' => $this->faker->word,
            'sexo' => $this->faker->word,
            'carrera' => $this->faker->word,
            'created_by' => $this->faker->randomNumber(),
            'deleted_by' => $this->faker->randomNumber(),
            'updated_by' => $this->faker->randomNumber(),
        ];
    }
}
