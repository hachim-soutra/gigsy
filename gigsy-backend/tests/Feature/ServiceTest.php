<?php

namespace Tests\Feature;

use App\Models\Service;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Http\Response;
use Tests\TestCase;

class ServiceTest extends TestCase
{
    use DatabaseMigrations;

    /** @test */
    public function it_should_fetch_services()
    {
        $data = Service::factory()->count(10)->create();
        $response = $this->get(route('shared.services.index'));
        $response->assertStatus(Response::HTTP_OK)
            ->assertSee([
                'data', 'code',
            ])
            ->assertJson(compact('data'));
    }
}
