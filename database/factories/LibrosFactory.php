<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Autor;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Libros>
 */
class LibrosFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
                'titulo' => fake()->sentence(),
                'autor_id' => fake()->randomElement(Autor::all()->pluck('id')->toArray()),
                'editorial' => fake()->company(),
                'isbn' => fake()->isbn13(),
        ];
    }
}
