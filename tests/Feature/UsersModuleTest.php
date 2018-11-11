<?php

namespace Tests\Feature;

use App\Models\User;
use Tests\TestCase;
use Illuminate\Support\Facades\DB;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UsersModuleTest extends TestCase
{
    use RefreshDatabase;
    /**
     * @test
     * @return void
     */
    function showingUsers()
    {
        factory(User::class)->create([
            'name' => 'Tom'
        ]);

        factory(User::class)->create([
            'name' => 'Jerry'
        ]);

        $this->get('/users')
            ->assertStatus(200)
            ->assertSee('Users List')
            ->assertSee('Tom')
            ->assertSee('Jerry');
    }

    /**
     * @test
     * @return void
     */
    function defaultMessageWhenNoUsers()
    {
        $this->get('/users')
            ->assertStatus(200)
            ->assertSee('No registered users');
    }

    /**
     * @test
     * @return void
     */
    function usersDetails()
    {
        $user = factory(USer::class)->create ([
            'name' => 'Perico de los Palotes'
        ]);
        $this->get('/users/'.$user->id)
            ->assertStatus(200)
            ->assertSee('User\'s Details')
            ->assertSee('Showing '.$user->name .'\'s details')
            ->assertSee('Id: '.$user->id);
    }

    /**
     * @test
     * @return void
     */
    function newUser()
    {
        $this->get('/users/new')
            ->assertStatus(200)
            ->assertSee('User\'s Data')
            ->assertSee('name : Max');
    }

    /**
     * @test
     * @return void
     */
    function editUser()
    {
        $this->get('/users/5/edit')
            ->assertStatus(200)
            ->assertSee('Editing User')
            ->assertSee('User\'s Data')
            ->assertSee('Name:')
            ->assertSee('Max');
    }

    function error_404_no_user_found()
    {
        $this->get('/users/999')
            ->assertStatus(404)
            ->assertSee('Page not found');
    }
}
