<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index() 
    {
        return 'Users';        
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
