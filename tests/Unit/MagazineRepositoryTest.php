<?php

namespace Tests\Unit;

use App\Entities\Magazine;
use Tests\TestCase;

class MagazineRepositoryTest extends TestCase
{
    public function testUnauthorizedAccess()
    {
        $response = $this->get('/api/magazines/15');
        $response->assertStatus(400);
    }

    public function testGetMagazineByValidId()
    {
        $token = $this->getUserToken();

        $response = $this->withHeaders([
            'Authorization' => 'Bearer '.$token,
        ])->json('GET', '/api/magazines/15');
        $response->assertStatus(200);
    }

    public function testGetMagazineByInvalidId()
    {
        $token = $this->getUserToken();

        $response = $this->withHeaders([
            'Authorization' => 'Bearer '.$token,
        ])->json('GET', '/api/magazines/15000');
        $response->assertStatus(404);        
    }

    public function testSearchMagazinesWithEmptyParameters()
    {
        $token = $this->getUserToken();

        $response = $this->withHeaders([
            'Authorization' => 'Bearer '.$token,
        ])->json('GET', '/api/magazines/search?name=&publisher_id=');
        $response->assertStatus(422);
    }

    public function testSearchMagazinesWithParameters()
    {
        $magazine = Magazine::find(5);

        $token = $this->getUserToken();

        $response = $this->withHeaders([
            'Authorization' => 'Bearer '.$token,
        ])->json('GET', '/api/magazines/search?name='.$magazine->name.'&publisher_id='.$magazine->publisher_id);

        $response->assertStatus(200);

        $this->assertTrue($magazine->id === $response->getData()->data[0]->id);
        $this->assertTrue($magazine->publisher_id === $response->getData()->data[0]->publisher_id);
        $this->assertTrue($magazine->name === $response->getData()->data[0]->name);
    }
}
