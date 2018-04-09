<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index() 
    {
        if (request()->has('empty')){
            $users = [];
        } else{
            $users = ['Tom', 'Jerry', 'Michael', 'Johnny', 'Alfredo'];
        }
        
        $title = 'Users List';

        return view('users', compact('title', 'users'));   
    }

    public function showUserDetails($id)
    {
        $user = array("id" => $id, "name" => "Max", "lastName" => "Power", "age" => "45", "height" => '1,75m', "city" => "Springfield" );
        return view('showUserDetails', compact('user'));
    }

    public function createUser()
    {
        $user = array("id" => "5", "name" => "Max", "lastName" => "Power", "age" => "45", "height" => '1,75m', "city" => "Springfield" );
        return view('createUser', compact('user'));
    }

    public function edit($id)
    {
        //Normally you'd get data from DB by ID
        $user = array("id" => "5", "name" => "Max", "lastName" => "Power", "age" => "45", "height" => '1,75m', "city" => "Springfield" );
        return view('editUser', compact('user'));
    }
}
