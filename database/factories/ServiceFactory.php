<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Service>
 */
class ServiceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->randomElement
            (
                [ "Office Cleaning", "House Cleaning", "Carpet Cleaning", "Window Cleaning"]
            ),
            'description' => fake()->text(199),
            'duration' => fake()->numberBetween(1, 10),
            'price' => fake()->numberBetween(100000, 1000000),
            'is_active' => fake()->boolean(),


        ];
    }
}