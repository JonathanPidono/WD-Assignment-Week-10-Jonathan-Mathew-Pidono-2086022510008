<?php

namespace Database\Factories;

use App\Models\Home;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * @extends Factory<Home>
 */
class HomeFactory extends Factory
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
            'description' => fake()->sentence(12),
            'tech_stack' => fake()->randomElement([
                'Laravel, Tailwind CSS',
                'Flutter, Dart',
                'Flutter, MVVM',
                'Cisco Packet Tracer',
                'GitHub Pages',
            ]),
            'status' => fake()->randomElement(['Completed', 'In progress']),
            'category' => fake()->randomElement(['Web', 'Mobile', 'Network']),
        ];
    }
}
