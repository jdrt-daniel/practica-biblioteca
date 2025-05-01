<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Libros;
use App\Models\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Prestamos>
 */
class PrestamosFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'libro_id' => fake()->randomElement(Libros::all()->pluck('id')->toArray()),
            'lector_id' => fake()->randomElement(User::all()->pluck('id')->toArray()),
            'fecha_prestamo' => fake()->date(),
            'fecha_devolucion' => fake()->date(),
        ];
    }
}
