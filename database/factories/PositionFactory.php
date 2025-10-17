<?php

namespace Database\Factories;

use App\Models\Position;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Position>
 */
class PositionFactory extends Factory
{
    protected $model = Position::class;

    public function definition(): array
    {
        return [
            'name' => $this->faker->jobTitle,
            'code' => $this->faker->unique()->lexify('POS??'),
            'description' => $this->faker->sentence,
            'level' => $this->faker->numberBetween(1, 10),
            'is_active' => true,
        ];
    }
}
