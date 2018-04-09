<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UsersModuleTest extends TestCase
{
    /**
     * @test
     * @return void
     */
    function showingUsers()
    {
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
        $this->get('/users?empty')
            ->assertStatus(200)
            ->assertSee('No registered users');
    }

    /**
     * @test
     * @return void
     */
    function usersDetails()
    {
        $this->get('/users/5')
            ->assertStatus(200)
            ->assertSee('User\'s Details')
            ->assertSee('Showing user\'s details: 5');
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
}
