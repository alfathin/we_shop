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
            'title' => $this->faker->words(3, true),
            'slug' => $this->faker->slug(),
            'excerpt' => $this->faker->randomNumber(5, true),
            'body' => $this->faker->paragraph(mt_rand(5, 10)),
            'category_id' => mt_rand(1, 3),
            'user_id' => mt_rand(1, 5),
            'total_stock' => $this->faker->randomNumber(3),
            'stock_left' => $this->faker->randomNumber(2)
        ];
    }
}
