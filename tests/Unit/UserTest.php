<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UserTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    use RefreshDatabase;

    public function test_user()
    {
        $email = 'test@gmail.com';
        $password = 'Test_123456';
        $hashedPassword = Hash::make($password);
        $user = User::factory()->make([ 'name' => 'abc', 'email' => $email, 'password' => $hashedPassword]);
        $this->assertEquals('abc', $user->name);
        $this->assertFalse(Auth::attempt(['email' => $email, 'password' => 'wrong']));
        $this->assertTrue(Auth::attempt(['email' => $email, 'password' => $password]));

    }
}
