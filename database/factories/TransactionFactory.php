<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Transaction>
 */
class TransactionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'transaction_title' => fake()->sentence(8),
            'description' => fake()->sentence(20),
            'status' => fake()->randomElement(['successful', 'declined']),
            'total_amount' => fake()->randomFloat(2, 1, 1000),
            'transaction_number' => fake()->randomFloat(2, 1, 1000)
        ];
    }
}