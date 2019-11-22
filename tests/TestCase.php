<?php

namespace Tests;

use Illuminate\Foundation\Testing\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase
{
    use CreatesApplication;

    public function getUserToken()
    {
        $response = $this->json('POST', '/api/authorize', ['name' => 'admin', 'password' => 'admin']);
        return $response->getData()->token;
    }
}
