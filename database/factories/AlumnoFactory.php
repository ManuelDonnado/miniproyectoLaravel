<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\alumno>
 */
class AlumnoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'matricula'=>fake()->numberBetween(),
            'nombre'=>fake()->firstName(),
            'apellido'=>fake()->lastName(),
            'telefono'=>fake()->phoneNumber(),
            'direccion'=>fake()->lastName(),
            'correo'=>fake()->email(),
            'password'=>fake()->password(),
        ];
    }
}
