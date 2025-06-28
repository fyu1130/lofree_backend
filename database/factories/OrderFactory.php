<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
use App\Models\Product;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Order>
 */
class OrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => User::factory(),
            'product_id' => Product::factory(),
            'payment_method' => $this->faker->randomElement(['card', 'cash']),
            'delivery_name' => $this->faker->name(),
            'postal_code' => $this->faker->postcode(),
            'address' => $this->faker->address(),
            'building' => $this->faker->optional()->secondaryAddress(),
            'phone' => $this->faker->phoneNumber(),
            'status' => $this->faker->randomElement(['pending', 'completed', 'canceled']),
            'created_at' => now(),
        ];
    }
}
