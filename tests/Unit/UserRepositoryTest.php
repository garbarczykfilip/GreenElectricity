<?php

namespace Tests\Unit;

use Tests\TestCase;

class UserRepositoryTest extends TestCase
{
    public function testAuthenticationWithValidCredentials()
    {
        $response = $this->json('POST', '/api/authorize', ['name' => 'admin', 'password' => 'admin']);
        $response->assertStatus(200);
    }

    public function testAuthenticationWithInvalidCredentials()
    {
        $response = $this->json('POST', '/api/authorize', ['name2' => 'admin2', 'password2' => 'admin2']);
        $response->assertStatus(400);
    }
}
