<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Estudiante;
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
    protected $model = Estudiante::class;
 

    public function definition(): array
    {
        return [
            'cuenta' => $this->faker->unique()->numerify('###########'), 
            'nombre' => $this->faker->firstName(),
            'apellido' => $this->faker->lastName(),
            'sexo' => $this->faker->randomElement(['Masculino', 'Femenino']), 
            'carrera' => $this->faker->sentence(2), 
            'created_by'=>1
            ];
    }
}
