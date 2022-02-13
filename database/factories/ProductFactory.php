<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->sentence(),
            'description' => $this->faker->text(200),
            'image' => $this->faker->imageUrl(),
            'brand' => $this->faker->sentence(),
            'price' => $this->faker->numberBetween(100,3000),
            'price_sale' => $this->faker->numberBetween(100,3000),
            'category' => $this->faker->sentence(),
            'stock' => $this->faker->numberBetween(0,100)
        ];
    }
}
