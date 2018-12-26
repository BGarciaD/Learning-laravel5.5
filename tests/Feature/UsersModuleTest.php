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
        $this->withoutExceptionHandling(); //Method to disable handling exceptions and showing to the user

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
        //$this->withoutExceptionHandling();
        $this->from('users/new')
            ->post('/users/new', [
                'name' => '',
                'email' => 'tomasturbado@gmail.com',
                'password' => '123456'
            ])->assertRedirect('users/new')
                ->assertSessionHasErrors(['name' => 'The name is required']);

        $this->assertDatabaseMissing('users', [
            'email' => 'tomasturbado@gmail.com',
        ]);

        $this->assertEquals(0, User::count()); //Another way to test the user was not created
    }

    /**
     * @test
     * @return void
     */
    function validate_new_user_email_required()
    {
        //$this->withoutExceptionHandling();
        $this->from('users/new')
            ->post('/users/new', [
                'name' => 'Pepe Paco',
                'email' => '',
                'password' => '123456'
            ])->assertRedirect('users/new')
                ->assertSessionHasErrors(['email' => 'The email is required']);

        $this->assertDatabaseMissing('users', [
            'name' => 'Pepe Paco',
        ]);
    }

    /**
     * @test
     * @return void
     */
    function validate_new_user_email_must_be_valid()
    {
        //$this->withoutExceptionHandling();
        $this->from('users/new')
            ->post('/users/new', [
                'name' => 'Pepe Paco',
                'email' => 'correo-no-deseado',
                'password' => '123456'
            ])->assertRedirect('users/new')
                ->assertSessionHasErrors(['email' => 'The email is not valid']);

        $this->assertDatabaseMissing('users', [
            'name' => 'Pepe Paco',
        ]);
    }

    /**
     * @test
     * @return void
     */
    function validate_new_user_email_unique()
    {
        //$this->withoutExceptionHandling();
        
        factory(User::class)->create([
            'email' => 'estella30@example.org'
        ]);
        
        $this->from('users/new')
            ->post('/users/new', [
                'name' => 'Paco Pepe',
                'email' => 'estella30@example.org',
                'password' => '123456'
            ])->assertRedirect('/users/new')
                ->assertSessionHasErrors(['email' => 'The email already exists']);

        $this->assertDatabaseMissing('users', [
            'name' => 'Paco Pepe',
        ]);
    }

    /**
     * @test
     * @return void
     */
    function validate_new_user_password_length()
    {
        //$this->withoutExceptionHandling();
        $this->from('users/new')
            ->post('/users/new', [
                'name' => 'Pepe Paco',
                'email' => 'alberto@example.com',
                'password' => '12345'
            ])->assertRedirect('users/new')
                ->assertSessionHasErrors(['password' => 'The minimal password\'s length is 6']);

        $this->assertDatabaseMissing('users', [
            'name' => 'Pepe Paco',
        ]);
    }

    /**
     * @test
     * @return void
     */
    function validate_new_user_password_required()
    {
        //$this->withoutExceptionHandling();
        $this->from('users/new')
            ->post('/users/new', [
                'name' => 'Pepe Paco',
                'email' => 'pepe@example.com',
                'password' => ''
            ])->assertRedirect('users/new')
                ->assertSessionHasErrors(['password' => 'The password is required']);

        $this->assertDatabaseMissing('users', [
            'name' => 'Pepe Paco',
        ]);
    }

    /**
     * @test
     * @return void
     */
    function edit_user_page()
    {
        $user = factory(User::class)->create();

        $this->get("/users/$user->id/edit")
            ->assertStatus(200)
            ->assertViewIs('users.edit')
            ->assertSee('Edit User')
            ->assertViewHas('user', function ($viewUser) use ($user){
                return $viewUser->id === $user->id;
            });
    }

    /**
     * @test
     * @return void
     */
    function update_user()
    {
        $this->withoutExceptionHandling(); //Method to disable handling exceptions and showing to the user
        $user = factory(User::class)->create();

        $this->put("/users/$user->id/edit", [
            'name' => 'Wladimiro Baesterillas',
            'email' => 'wladimiro@gmail.com',
            'password' => '123456'
        ])->assertRedirect(route('users.index'));

        $this->assertCredentials([
            'name' => 'Wladimiro Baesterillas',
            'email' => 'wladimiro@gmail.com',
            'password' => '123456'
        ]);
    }

    /**
     * @test
     * @return void
     */
    function validate_edit_user_name_required()
    {
        //$this->withoutExceptionHandling();
        $user = factory(User::class)->create();
        
        $this->from("/users/$user->id/edit")
            ->put("/users/$user->id/edit", [
                'name' => '',
                'email' => 'tomasturbado@gmail.com',
                'password' => '123456'
            ])
            ->assertRedirect("/users/$user->id/edit")
            ->assertSessionHasErrors(['name' => 'The name is required']);
        
            $this->assertDatabaseMissing('users', [
            'email' => 'tomasturbado@gmail.com',
        ]);
    }

    /**
     * @test
     * @return void
     */
    function validate_edit_user_email_required()
    {
        //$this->withoutExceptionHandling();
        $user = factory(User::class)->create();
        $this->from("/users/$user->id/edit")
            ->put("/users/$user->id/edit", [
                'name' => 'Pepe Paco',
                'email' => '',
                'password' => '123456'
            ])
            ->assertRedirect("/users/$user->id/edit")
            ->assertSessionHasErrors(['email' => 'The email is required']);

        $this->assertDatabaseMissing('users', [
            'name' => 'Pepe Paco',
        ]);
    }

    /**
     * @test
     * @return void
     */
    function validate_edit_user_email_must_be_valid()
    {
        //$this->withoutExceptionHandling();
        $user = factory(User::class)->create();
        $this->from("/users/$user->id/edit")
            ->put("/users/$user->id/edit", [
                'name' => 'Pepe Paco',
                'email' => 'correo-no-deseado',
                'password' => '123456'
            ])
            ->assertRedirect("/users/$user->id/edit")
            ->assertSessionHasErrors(['email' => 'The email is not valid']);

        $this->assertDatabaseMissing('users', [
            'name' => 'Pepe Paco',
        ]);
    }

    /**
     * @test
     * @return void
     */
    function validate_edit_user_email_must_be_unique()
    {
        //$this->withoutExceptionHandling();
        $randomUser = factory(User::class)->create([
            'email' => 'existing-email@example.test'
        ]);
        $user = factory(User::class)->create([
            'email' => 'estella30@example.org'
        ]);
        //This test is incomplete because the user can't updated it's own email
        $this->from("/users/$user->id/edit")
            ->put("/users/$user->id/edit", [
                'name' => 'Paco Pepe',
                'email' => 'existing-email@example.test',
                'password' => '123456'
            ])
            ->assertRedirect("/users/$user->id/edit")
            ->assertSessionHasErrors(['email' => 'The email already exists']);
    }

    /**
     * @test
     * @return void
     */
    function validate_edit_user_email_can_stay_the_same()
    {
        $this->withoutExceptionHandling();
        $user = factory(User::class)->create([
            'email' => 'email@example.test'
        ]);
        $this->from("/users/$user->id/edit")
            ->put("/users/$user->id/edit", [
                'name' => 'Pepe Paco',
                'email' => 'email@example.test',
                'password' => '12345678'
            ])
            ->assertRedirect("/users");
            
        $this->assertDatabaseHas('users',[
                'name' => 'Pepe Paco',
                'email' => 'email@example.test',
        ]);
    }

    /**
     * @test
     * @return void
     */
    function validate_edit_user_password_is_optional()
    {
        $this->withoutExceptionHandling();
        $oldPassword = 'PREVIOUS_PASSWORD';
        $user = factory(User::class)->create([
            'password' => bcrypt($oldPassword)
        ]);
        $this->from("/users/$user->id/edit")
            ->put("/users/$user->id/edit", [
                'name' => 'Pepe Paco',
                'email' => 'pepe@example.com',
                'password' => ''
            ])
            ->assertRedirect("/users");
            
        $this->assertCredentials([
                'name' => 'Pepe Paco',
                'email' => 'pepe@example.com',
                'password' => $oldPassword
        ]);
    }

    /**
     * @test
     * @return void
     */
    function detele_user()
    {
        //$this->withoutExceptionHandling();
        
        $user = factory(User::class)->create();

        $this->delete("users/{$user->id}")
            ->assertRedirect('/users');
        
        $this->assertDatabaseMissing('users', [
            'id' => $user->id
        ]);

        $this->assertEquals(0, User::count());
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
