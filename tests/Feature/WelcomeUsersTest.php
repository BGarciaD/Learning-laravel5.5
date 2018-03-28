<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class WelcomeUsersTest extends TestCase
{
    /**
     * @test
     * @return void
     */
    function usersWithNickname()
    {
        $this->get('/greeting/Jose/pepito')
            ->assertStatus(200)
            ->assertSee('Welcome Jose, you nickname will be pepito');
    }

    /**
     * @test
     * @return void
     */
    function usersWithoutNickname()
    {
        $this->get('/greeting/jose')
            ->assertStatus(200)
            ->assertSee('Welcome Jose, you didn\'t choose a nickname');
    }
}
