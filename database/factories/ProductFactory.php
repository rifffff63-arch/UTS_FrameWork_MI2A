<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Category;

class ProductFactory extends Factory
{
    public function definition(): array
    {
        return [
            'category_id' => Category::inRandomOrder()->first()->id, // 🔥 ini penting
            'name' => fake()->word(),
            'price' => fake()->numberBetween(10000, 100000),
            'stock' => fake()->numberBetween(1, 50),
        ];
    }
}
