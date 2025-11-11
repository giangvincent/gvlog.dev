<?php

namespace Tests\Feature;

use App\Models\Service;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ServiceApiTest extends TestCase
{
    use RefreshDatabase;

    public function test_it_lists_services_in_order(): void
    {
        $first = Service::factory()->create(['sort_order' => 1]);
        $second = Service::factory()->create(['sort_order' => 5]);

        $response = $this->getJson('/api/v1/services');

        $response
            ->assertOk()
            ->assertJsonPath('0.slug', $first->slug)
            ->assertJsonPath('1.slug', $second->slug);
    }

    public function test_it_shows_a_single_service(): void
    {
        $service = Service::factory()->create([
            'title' => 'Consulting',
            'slug' => 'consulting',
        ]);

        $response = $this->getJson('/api/v1/services/consulting');

        $response
            ->assertOk()
            ->assertJsonFragment([
                'slug' => 'consulting',
                'title' => 'Consulting',
            ]);
    }
}
