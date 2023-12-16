<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Employee>
 */
class EmployeeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'full_name'   => fake()->name(),
            'email'       => fake()->email(),
            'position'    => fake()->randomElement(['Supervisor', 'Manager', 'Human Resource', 'Line Worker']),
            'department'  => fake()->randomElement(['Line', 'Improvements', 'Administrator', 'Communication']),
        ];
    }
}
