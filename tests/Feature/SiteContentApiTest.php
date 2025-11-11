<?php

namespace Tests\Feature;

use App\Models\AboutContent;
use App\Models\Post;
use App\Models\PortfolioProject;
use App\Models\Service;
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

    public function test_homepage_endpoint_returns_services_portfolios_posts_and_about(): void
    {
        $services = Service::factory()->count(2)->create();

        $project = PortfolioProject::factory()->create([
            'published_at' => now()->subDay(),
        ]);

        Post::create([
            'title' => 'Latest Update',
            'slug' => 'latest-update',
            'excerpt' => 'Excerpt',
            'body' => 'Body',
            'status' => 'published',
            'published_at' => now()->subDay(),
        ]);

        AboutContent::factory()->create([
            'slug' => 'default',
        ]);

        $response = $this->getJson('/api/v1/content/homepage');

        $response
            ->assertOk()
            ->assertJsonFragment([
                'slug' => $services->first()->slug,
            ])
            ->assertJsonFragment([
                'slug' => $project->slug,
            ])
            ->assertJsonFragment([
                'slug' => 'default',
            ]);
    }

    public function test_overview_endpoint_combines_content(): void
    {
        Service::factory()->create();
        PortfolioProject::factory()->create(['published_at' => now()->subDay()]);
        Post::create([
            'title' => 'Overview Post',
            'slug' => 'overview-post',
            'excerpt' => 'Excerpt',
            'body' => 'Body',
            'status' => 'published',
            'published_at' => now()->subDay(),
        ]);
        AboutContent::factory()->create(['slug' => 'default']);

        $homepageResponse = $this->getJson('/api/v1/content/homepage');
        $overviewResponse = $this->getJson('/api/v1/content');

        $homepageResponse->assertOk();
        $overviewResponse
            ->assertOk()
            ->assertExactJson($homepageResponse->json());
    }
}
