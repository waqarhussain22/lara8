<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;

class LoginPageTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_loginUser(){
        //

            $this->withoutMiddleware(); // trying without the middleware
            $user = User::factory()->create();

            $response = $this->post('/login', [
                "email" => $user->email,
                "password" => 'password'
            ]);

            $this->assertAuthenticated();
            $response->assertRedirect('/stories');
        }
}
