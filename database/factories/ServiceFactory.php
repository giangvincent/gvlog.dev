<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Service>
 */
class ServiceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $title = $this->faker->unique()->sentence(3);

        return [
            'slug' => Str::slug($title) . '-' . $this->faker->unique()->numberBetween(100, 999),
            'title' => $title,
            'subtitle' => $this->faker->sentence(6),
            'excerpt' => $this->faker->paragraph(),
            'body' => $this->faker->paragraphs(3, true),
            'cover_image_path' => 'services/' . Str::uuid() . '.jpg',
            'is_featured' => $this->faker->boolean(40),
            'sort_order' => $this->faker->numberBetween(0, 50),
            'meta' => [
                'cta_label' => 'Learn more',
                'cta_url' => $this->faker->url(),
            ],
        ];
    }
}
