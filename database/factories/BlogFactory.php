<?php

namespace Database\Factories;

use App\Models\Blog;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Blog>
 */
class BlogFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->unique()->words(3, true),
            'slug' => fake()->unique()->words(3, true),
            'excerpt' => fake()->sentence(12),
            'category' => fake()->randomElement(['Journal, Documentation']),
            'published_at' => fake()->date('j F Y'),
        ];
    }
}
