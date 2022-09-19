<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ClothingColor>
 */
class ClothingSizeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            "clothing_id" => $this->faker->numberBetween(1, 100),
            "color_id" => $this->faker->numberBetween(1, 6),
        ];
    }
}
