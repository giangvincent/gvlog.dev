<?php

namespace Tests\Feature;

use App\Models\PortfolioProject;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class PortfolioApiTest extends TestCase
{
    use RefreshDatabase;

    public function test_it_lists_only_published_projects(): void
    {
        $published = PortfolioProject::factory()->count(2)->create([
            'published_at' => now()->subDay(),
        ]);
        PortfolioProject::factory()->create(['published_at' => null]);

        $response = $this->getJson('/api/v1/portfolio');

        $response
            ->assertOk()
            ->assertJsonCount(2)
            ->assertJsonFragment(['slug' => $published->first()->slug]);
    }

    public function test_it_shows_a_single_project(): void
    {
        $project = PortfolioProject::factory()->create([
            'published_at' => now()->subDay(),
        ]);

        $response = $this->getJson("/api/v1/portfolio/{$project->slug}");

        $response
            ->assertOk()
            ->assertJsonFragment([
                'slug' => $project->slug,
                'title' => $project->title,
            ]);
    }

    public function test_it_404s_for_unpublished_projects(): void
    {
        $project = PortfolioProject::factory()->create([
            'published_at' => null,
        ]);

        $this->getJson("/api/v1/portfolio/{$project->slug}")
            ->assertNotFound();
    }
}
