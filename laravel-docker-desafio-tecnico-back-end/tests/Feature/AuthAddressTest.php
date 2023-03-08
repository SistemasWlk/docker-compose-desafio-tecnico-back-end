<?php

namespace Tests\Feature;

use App\Models\Address;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\Feature\UtilsTrait;
use Tests\TestCase;

class AuthAddressTest extends TestCase
{
    use UtilsTrait;

    public function test_unauthenticated()
    {
        $response = $this->getJson('/address');

        $response->assertStatus(401);
    }

    public function test_get_all_addresses()
    {
        $response = $this->getJson('/address', $this->defaultHeaders());

        $response->assertStatus(200);
    }

    public function test_get_all_addresses_total()
    {
        Address::factory()->count(10)->create();

        $response = $this->getJson('/address', $this->defaultHeaders());

        $response->assertStatus(200)
                    ->assertJsonCount(10, 'data');
    }

    public function test_get_single_address_unauthenticated()
    {
        $response = $this->getJson('/address/fake_id');

        $response->assertStatus(401);
    }

    public function test_get_single_address_not_found()
    {
        $response = $this->getJson('/address/fake_id', $this->defaultHeaders());

        $response->assertStatus(404);
    }

    public function test_get_single_address()
    {
        $address = Address::factory()->create();

        $response = $this->getJson("/address/{$address->id}", $this->defaultHeaders());

        $response->assertStatus(200);
    }
}
