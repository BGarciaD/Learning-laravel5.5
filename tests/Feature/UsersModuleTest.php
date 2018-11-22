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
    function showing_users()
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
    function default_message_When_no_users()
    {
        $this->get('/users')
            ->assertStatus(200)
            ->assertSee('No registered users');
    }

    /**
     * @test
     * @return void
     */
    function user_details()
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
    function new_user_form()
    {
        $this->get('/users/new')
            ->assertStatus(200)
            ->assertSee('Create User')
            ->assertSee('Return to user\'s list');
    }

    /**
     * @test
     * @return void
     */
    function create_user()
    {
        //$this->withoutExceptionHandling(); Method to disable handling exceptions and showing to the user

        $this->post('/users/new', [
            'name' => 'Tomás Turbado',
            'email' => 'tomasturbado@gmail.com',
            'password' => '123456'
        ])->assertRedirect(route('users.index'));

        $this->assertCredentials([
            'name' => 'Tomás Turbado',
            'email' => 'tomasturbado@gmail.com',
            'password' => '123456'
        ]);
    }

    /**
     * @test
     * @return void
     */
    function validate_new_user_name_required()
    {
        $this->withoutExceptionHandling();
        $this->post('/users/new', [
            'name' => '',
            'email' => 'tomasturbado@gmail.com',
            'password' => '123456'
        ])->assertRedirect(route('users.create'))
            ->assertSessionHasErrors(['name']);

        $this->assertDatabaseMissing('users', [
            'email' => 'tomasturbado@gmail.com',
        ]);
    }

    /**
     * @test
     * @return void
     */
    function edit_user()
    {
        $this->get('/users/5/edit')
            ->assertStatus(200)
            ->assertSee('Editing User')
            ->assertSee('User\'s Data')
            ->assertSee('Name:')
            ->assertSee('Max');
    }

    /**
     * @test
     * @return void
     */
    function error_404_no_user_found()
    {
        $this->get('/users/999')
            ->assertStatus(404)
            ->assertSee('¡¡¡This is not the page you are looking for!!!');
    }
}
