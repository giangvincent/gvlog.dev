<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\AboutContent>
 */
class AboutContentFactory extends Factory
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
            'headline' => $this->faker->sentence(6),
            'subheadline' => $this->faker->sentence(10),
            'bio' => $this->faker->paragraphs(3, true),
            'location' => $this->faker->city(),
            'years_experience' => $this->faker->numberBetween(1, 12),
            'primary_cta_label' => 'Work With Me',
            'primary_cta_url' => 'mailto:hello@example.com',
            'secondary_cta_label' => 'Download Resume',
            'secondary_cta_url' => $this->faker->url(),
            'skills' => $this->faker->randomElements(
                ['Laravel', 'Filament', 'PHP', 'Vue', 'React', 'Tailwind', 'Design Systems'],
                $this->faker->numberBetween(3, 6)
            ),
            'avatar_url' => $this->faker->imageUrl(),
            'meta' => [
                'hobbies' => $this->faker->words(3),
            ],
        ];
    }
}
