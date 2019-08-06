<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function COntactTest()
    {
        $response = $this->get('/contact');

        $response->assertStatus(200);
    }
}
