<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class MessageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "user_id" => 1, 
            "title" => fake()->sentence(),
            "color" => fake()->safeColorName(),
            "mood" => fake()->word(),
            "message" => fake()->paragraph(),
            "audio" => fake()->paragraph(), 
            "media" => fake()->paragraph(),
            "reveal_date" => fake()->dateTime(),
            "location" => fake()->paragraph(), 
            "privacy" => fake()->randomElement(['public', 'private', 'friends'])
        ];
    }
}
