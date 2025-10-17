<?php

namespace Database\Factories;

use App\Models\Grade;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Grade>
 */
class GradeFactory extends Factory
{
    protected $model = Grade::class;

    public function definition(): array
    {
        return [
            'name' => $this->faker->word,
            'code' => $this->faker->unique()->lexify('GRD??'),
            'description' => $this->faker->sentence,
            'scheme' => $this->faker->word,
            'salary_min' => $this->faker->numberBetween(1000, 5000),
            'salary_max' => $this->faker->numberBetween(5001, 10000),
            'is_active' => true,
        ];
    }
}
