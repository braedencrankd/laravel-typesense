<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Game>
 */
class GameFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name,
            'release_date' => $this->faker->dateTimeThisYear,
            'price' => $this->faker->randomFloat(2, 0, 100),
            'positive' => $this->faker->numberBetween(0, 100),
            'negative' => $this->faker->numberBetween(0, 100),
            'app_id' => $this->faker->randomNumber(8),
            'min_owners' => $this->faker->numberBetween(0, 100),
            'max_owners' => $this->faker->numberBetween(0, 100),
            'hltb_single' => $this->faker->numberBetween(0, 100),
        ];
    }
}
