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
            'title' => $this->faker->sentence(mt_rand(3, 5)),
            'slug' => $this->faker->slug(),
            'excerpt' => $this->faker->randomNumber(5, true),
            'body' => $this->faker->paragraph(mt_rand(50, 100))
        ];
    }
}
