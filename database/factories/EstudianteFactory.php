<?php

namespace Database\Factories;

use App\Models\Estudiante;
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
    protected $model = Estudiante::class;
    public function definition(): array
    {
        return [
            'cuenta' => $this->faker->numerify('#############'),
            'nombre' => $this->faker->firstName(),
            'apellido'=> $this->faker->lastName(),
            'sexo' => $this->faker->randomElement(['Masculino', 'Femenino']),
            'carrera' => $this->faker->randomElement([
                'Ingeniería en Sistemas',
                'Comercio Internacional',
                'Derecho',
                'Medicina',
                'Administración de Empresas'
            ]),
            'created_by'=>1
            //
        ];
    }
}
