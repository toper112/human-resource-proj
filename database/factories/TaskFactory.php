<?php

namespace Database\Factories;

use App\Models\Employee;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Task>
 */
class TaskFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title'         =>fake()->title(),
            'description'   =>fake()->sentence(),
            'employee_id'   =>fake()->randomElement(Employee::pluck('id')),
            'deadline'      =>fake()->date(),
            'status'        =>fake()->randomElement(['Pending', 'Accomplished'])
        ];
    }
}
