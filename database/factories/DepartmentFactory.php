<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
// use App\Models\Department;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Department>
 */
class DepartmentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => fake()->name(),
            // 'parent_id' => Department::all()->random()->id,
        ];
    }
}