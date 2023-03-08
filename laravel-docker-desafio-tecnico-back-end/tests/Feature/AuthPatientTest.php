<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class AuthPatientTest extends TestCase
{
    use UtilsTrait;

    public function test_unauthenticated()
    {
        $response = $this->getJson('/patient');

        $response->assertStatus(401);
    }

    public function test_get_all_patientes()
    {
        $response = $this->getJson('/patient', $this->defaultHeaders());

        $response->assertStatus(200);
    }

    public function test_get_single_patient_unauthenticated()
    {
        $response = $this->getJson('/patient/fake_id');

        $response->assertStatus(401);
    }

    public function test_get_single_patient_not_found()
    {
        $response = $this->getJson('/patient/fake_id', $this->defaultHeaders());

        $response->assertStatus(404);
    }

}
