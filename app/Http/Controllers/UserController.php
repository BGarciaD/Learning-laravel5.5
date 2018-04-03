<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index() 
    {
        $users = [
            'Tom',
            'Jerry',
            'Michael',
            'Johnny',
            'Alfredo',
            '<script>alert("TONTO");</script>'
        ];
        $title = 'Users List';

        /*return view('users', [
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
        dd(compact('title', 'users'));*/
        return view('users', compact('title', 'users'));   
    }

    public function show($id)
    {
        return "Showing user's details: {$id}";
    }

    public function create()
    {
        return 'Creating new user';
    }

    public function edit($id)
    {
        return "Editing user with id: $id";
    }
}
