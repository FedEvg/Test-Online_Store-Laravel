<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Clothing>
 */
class ClothingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            "name" => $this->faker->word().rand(0, 99),
            "price" => $this->faker->numberBetween(80, 400),
            "category_id" => $this->faker->numberBetween(1, 8),
            "brand_id" => $this->faker->numberBetween(1, 10),
            "preview_image" => $this->faker->randomElement([
                "images/w3lIj8xnxi5fPHEsdzSvWnDakBgTUjLwrFDaTGad.png",
                "images/np7f1i3w0QT2RDEiEckRmtrIGP8fHjMhaVb4OwFr.png",
                "images/DruI4LyRdf0CSN3rh5rHo8zYY1Yhn4yE8LHjeeNI.jpg"
            ]),
            "quantity" => $this->faker->numberBetween(5, 30),
            "status_id" => $this->faker->numberBetween(0, 1),
            "discount" => $this->faker->randomElement(["20", "40", "60"]),
        ];
    }
}
