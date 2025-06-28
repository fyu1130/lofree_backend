<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Category;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->words(3, true),
            'description' => $this->faker->paragraph(),
            'price' => $this->faker->numberBetween(500, 100000),
            'category_id' => Category::inRandomOrder()->first()->id,
            'condition' => $this->faker->randomElement(['new', 'used']),
            'status' => $this->faker->randomElement(['active', 'sold', 'deleted']),
            'created_at' => now(),
        ];
    }
}
