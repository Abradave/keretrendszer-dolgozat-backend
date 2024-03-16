<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PublicTransport>
 */
class PublicTransportFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "model" => fake()->randomElement(["Rába", "Mercedes", "Volvo", "Ikarus", "Combino", "Man"]),
            "year_made" => fake()->date(),
            "capacity" => fake()->numberBetween(1,250)
        ];
    }
}
