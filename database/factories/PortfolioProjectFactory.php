<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories.Factory<\App\Models\PortfolioProject>
 */
class PortfolioProjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $title = $this->faker->unique()->sentence(3);
        $tagPool = ['Laravel', 'PHP', 'Vue', 'React', 'Tailwind', 'Filament', 'Livewire', 'MySQL'];

        return [
            'title' => $title,
            'slug' => Str::slug($title) . '-' . $this->faker->unique()->numberBetween(100, 999),
            'tagline' => $this->faker->sentence(8),
            'summary' => $this->faker->paragraph(),
            'body' => $this->faker->paragraphs(4, true),
            'thumbnail_url' => $this->faker->imageUrl(),
            'hero_image_url' => $this->faker->imageUrl(),
            'project_url' => $this->faker->url(),
            'source_url' => $this->faker->url(),
            'tags' => $this->faker->randomElements($tagPool, $this->faker->numberBetween(2, 4)),
            'is_featured' => $this->faker->boolean(30),
            'sort_order' => $this->faker->numberBetween(0, 50),
            'published_at' => $this->faker->optional()->dateTimeBetween('-1 years'),
        ];
    }
}
