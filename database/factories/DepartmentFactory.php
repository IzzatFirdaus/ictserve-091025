<?php

namespace Database\Factories;

use App\Models\Department;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Department>
 */
class DepartmentFactory extends Factory
{
    protected $model = Department::class;

    public function definition(): array
    {
        return [
            'name' => $this->faker->company,
            'code' => $this->faker->unique()->lexify('DEPT????'),
            'description' => $this->faker->sentence,
            'branch_type' => $this->faker->randomElement(['HQ', 'Branch']),
            'parent_department_id' => null,
            'head_user_id' => null,
            'is_active' => true,
        ];
    }
}
