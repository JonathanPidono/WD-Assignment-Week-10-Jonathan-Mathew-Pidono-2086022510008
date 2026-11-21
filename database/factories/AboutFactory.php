<?php

namespace Database\Factories;

use App\Models\About;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<About>
 */
class AboutFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'category' => fake()->randomElement([
                    'education',
                    'organization',
                    "work",
                    'skill_hard',
                    'skill_soft',
            ]),
            'title' => fake()->jobTitle(),
            'organization' => fake()->company(),
            'period' => fake()->year() . ' to present',
            'description' => fake()->sentence(),

        ];
    }
}
