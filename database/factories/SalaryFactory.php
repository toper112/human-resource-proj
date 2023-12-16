<?php

namespace Database\Factories;

use App\Models\Employee;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Salary>
 */
class SalaryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'employee_id'   =>fake()->randomElement(Employee::pluck('id')),
            'salary_amount' =>fake()->randomFloat(100.00,10,000.00),
            'salary_date'   =>fake()->dateTimeBetween('-1 year', 'now')

        ];
    }
}
