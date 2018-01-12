<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class LoadHomePageTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testLoadHomePage()
    {
        $response = $this->get('/');

        $response->assertSee('Laravel');
    }
}
