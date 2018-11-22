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
            'name' => 'required'
        ], [
            'name.required' => 'El campo nombre es obligatorio'
        ]);

        User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password'])
        ]);

        return redirect()->route('users.index');
    }

    public function edit($id)
    {
        //Normally you'd get data from DB by ID
        $user = array("id" => "5", "name" => "Max", "lastName" => "Power", "age" => "45", "height" => '1,75m', "city" => "Springfield" );
        return view('users.edit', compact('user'));
    }
}
