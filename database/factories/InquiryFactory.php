<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Inquiry>
 */
class InquiryFactory extends Factory
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
            'subject' => $this->faker->sentence(5),
            'body' => $this->faker->paragraph(),
            'email' => $this->faker->safeEmail(),
            'status' => $this->faker->randomElement(['open', 'closed']),
            'created_at' => now(),
        ];
    }
}
