<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Models\User;

class UserTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_user()
    {
        $user = User::factory()->make([ 'name' => 'abc' ]);
        $this->assertEquals('abc', $user->name);
    }
}
