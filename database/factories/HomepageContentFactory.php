<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories.Factory<\App\Models\HomepageContent>
 */
class HomepageContentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'slug' => 'default',
            'hero_title' => $this->faker->sentence(4),
            'hero_subtitle' => $this->faker->sentence(8),
            'hero_description' => $this->faker->paragraph(),
            'hero_cta_label' => 'View Portfolio',
            'hero_cta_url' => 'https://example.com/portfolio',
            'secondary_cta_label' => 'Contact Me',
            'secondary_cta_url' => 'mailto:hello@example.com',
            'intro_title' => 'Recent Work',
            'intro_body' => $this->faker->paragraph(),
            'seo_title' => $this->faker->sentence(6),
            'seo_description' => $this->faker->paragraph(2),
            'featured_project_ids' => [],
            'meta' => [
                'testimonials_heading' => 'What clients say',
            ],
        ];
    }
}
