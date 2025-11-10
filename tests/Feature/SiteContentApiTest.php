<?php

namespace Tests\Feature;

use App\Models\AboutContent;
use App\Models\HomepageContent;
use App\Models\PortfolioProject;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class SiteContentApiTest extends TestCase
{
    use RefreshDatabase;

    public function test_it_returns_about_page_content(): void
    {
        $about = AboutContent::factory()->create([
            'slug' => 'default',
        ]);

        $response = $this->getJson('/api/v1/content/about');

        $response
            ->assertOk()
            ->assertJsonFragment([
                'slug' => $about->slug,
                'headline' => $about->headline,
            ]);
    }

    public function test_it_returns_homepage_content_with_featured_projects(): void
    {
        $project = PortfolioProject::factory()->create([
            'published_at' => now()->subDay(),
        ]);

        $homepage = HomepageContent::factory()->create([
            'slug' => 'default',
            'featured_project_ids' => [$project->id],
        ]);

        $response = $this->getJson('/api/v1/content/homepage');

        $response
            ->assertOk()
            ->assertJsonFragment([
                'slug' => $homepage->slug,
                'hero_title' => $homepage->hero_title,
            ])
            ->assertJsonFragment([
                'slug' => $project->slug,
            ]);
    }

    public function test_overview_endpoint_combines_content(): void
    {
        $project = PortfolioProject::factory()->create([
            'published_at' => now()->subDay(),
        ]);

        AboutContent::factory()->create(['slug' => 'default']);
        HomepageContent::factory()->create([
            'slug' => 'default',
            'featured_project_ids' => [$project->id],
        ]);

        $response = $this->getJson('/api/v1/content');

        $response
            ->assertOk()
            ->assertJsonStructure([
                'about' => ['slug', 'headline'],
                'homepage' => ['slug', 'hero_title'],
                'featured_projects',
            ]);
    }
}
