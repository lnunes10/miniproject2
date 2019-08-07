<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CountUserTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function CountUserTest()
    {
        $count=Car::count('car');
        $this->assertEquals(50,$count);

    }
}
