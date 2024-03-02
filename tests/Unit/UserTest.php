<?php

namespace Tests\Unit;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UserTest extends TestCase
{
    use RefreshDatabase;

    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_can_create_user()
    {
        $data = [
            'name' => 'John Doe',
            'email' => 'john@example.com',
            'password' => 'password123',
        ];

        $user = User::create($data);

        $this->assertInstanceOf(User::class, $user);
        $this->assertEquals($data['name'], $user->name);
        $this->assertEquals($data['email'], $user->email);
    }

    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_can_update_user()
    {
        $user = User::factory()->create();

        $newData = [
            'name' => 'Jane Doe',
            'email' => 'jane@example.com',
        ];

        $user->update($newData);

        $this->assertEquals($newData['name'], $user->fresh()->name);
        $this->assertEquals($newData['email'], $user->fresh()->email);
    }

    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_can_delete_user()
    {
        $user = User::factory()->create();

        $user->delete();

        $this->assertDeleted($user);
    }

    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_can_retrieve_user()
    {
        $user = User::factory()->create();

        $retrievedUser = User::find($user->id);

        $this->assertInstanceOf(User::class, $retrievedUser);
        $this->assertEquals($user->name, $retrievedUser->name);
        $this->assertEquals($user->email, $retrievedUser->email);
    }
}
