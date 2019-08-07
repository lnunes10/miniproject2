<?php

namespace Tests\Unit;

use App\User;
use Illuminate\Support\Facades\App;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class InsertUserTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function InsertUserTest()
    {
        $user= new user();
        $this->assertAuthenticatedAs(true);
    }
}
