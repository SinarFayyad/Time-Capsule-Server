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
            "user_id" => rand(1,20), 
            "title" => fake()->sentence(),
            "color" => fake()->safeColorName(),
            "mood" => fake()->word(),
            "message" => fake()->paragraph(),
            "audio" => fake()->paragraph(), 
            "media" => fake()->paragraph(),
            "reveal_date" => fake()->date(),
            "location" => fake()->sentence(), 
            "privacy" => fake()->randomElement(['public', 'private', 'unlisted'])
        ];
    }
}
