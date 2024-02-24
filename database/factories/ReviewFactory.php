<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ReviewFactory extends Factory
{
    public function definition(): array
    {
        return [
            'description' => $this->faker->text($maxNbChars = 200),
            'rating' => $this->faker->numberBetween($min = 0, $max = 5),
        ];
    }
}
