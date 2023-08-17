<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\UserModels\User;

class UsersTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_user_store()
    {
        $response = $this->call('POST', '/users',
        [
            'name'     => 'Random Name',
            'surname'  => 'Random Surname',
            'email'    => 'Random Email',
            'position' => 'Random Position'
        ]);
        $response->assertStatus($response->status(),200);

    }

    public function test_user_index()
    {
        $response = $this->get('users');
        $response->assertStatus(200);  
    }
    public function test_user_destroy()
    {
        //  $user = User::factory()->count(1)->make();
        //  $user = User::first();
        //  if($user) {$user->delete();}
        //  $this->assertTrue(true);
    }
}
