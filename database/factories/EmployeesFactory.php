<?php

namespace Database\Factories;

use App\Models\Employees;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Employees>
 */
class EmployeesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            
            'name' => fake()->name(),
            'type' => fake()->randomElement(
                [ "Office Cleaning", "House Cleaning", "Carpet Cleaning", "Window Cleaning"]
            ),          
            'address' => fake()->address(),
            'phone' => fake()->phoneNumber(),
            'slug' => fake()->slug( ),
        ];
    }
}