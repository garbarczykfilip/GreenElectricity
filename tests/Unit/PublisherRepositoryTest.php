<?php

namespace Tests\Unit;

use Tests\TestCase;

class PublisherRepositoryTest extends TestCase
{
    public function testUnauthorizedAccess()
    {
        $response = $this->get('/api/publishers/list');
        $response->assertStatus(400);
    }

    public function testGetAllPublishers()
    {
        $token = $this->getUserToken();
        
        $response = $this->withHeaders([
            'Authorization' => 'Bearer '.$token,
        ])->json('GET', '/api/publishers/list');
        $response->assertStatus(200);
    }
}
