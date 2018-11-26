<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index() 
    {
        //$users = DB::table('users')->get();
        $users = User::all();

        $title = 'Users List';

        /* 
        BORRAR ESTO ANTES DE SUBIR A GIT
        return view('users', [
            'users' => $users,
            'title' => $title 
        ]);
        
        Other ways to pass props   
        return view('users')->with([
            'users' => $users,
            'title' => $title
        ]);
        return view('users')
            ->with('users', $users)
            ->with('title', $title);

        A way to check we are sending the array we want    
        dd(compact('title', 'users')); */
        return view('users.index', compact('title', 'users'));   
    }

    public function showUserDetails(User $user)
    {
        return view('users.showDetails', compact('user'));
    }

    public function createUser()
    {
        return view('users.create');
    }

    public function storeUser()
    {
        $data = request()->validate([
            'name' => 'required',
            'email' => ['required','unique:users,email','email'],
            'password' => 'required|min:6'
        ], [
            'name.required' => 'The name is required',
            'email.required' => 'The email is required',
            'email.unique' => 'The email already exists',
            'email.email' => 'The email is not valid',
            'password.required' => 'The password is required',
            'password.min' => 'The minimal password\'s length is 6' 
        ]);

        User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password'])
        ]);

        return redirect()->route('users.index');
    }

    public function edit(User $user)
    {
        return view('users.edit', ['user' => $user]);
    }
}
