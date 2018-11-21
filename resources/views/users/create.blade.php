@extends('layout')

@section('title', "Create User")

@section('content')
    <h1>Create user</h1>

    <form method="POST" action="{{ url('/users/new') }}">
        {{ csrf_field() }}
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md">
                    <label for="name">Name</label>
                </div>
            </div>
            <div class="row justify-content-center">
                    <div class="col-md">
                        <input type="text" name="name" id="name" placeholder="Alberto García">
                    </div>
                </div>
            <div class="row justify-content-center">
                <div class="col-md">
                    <label for="email">Email</label>
                </div>
            </div>
            <div class="row justify-content-center">
                    <div class="col-md">
                        <input type="email" name="email" id="email" placeholder="albertogarcia@gmail.com">
                    </div>
                </div>
            <div class="row justify-content-center">
                <div class="col-md">
                    <label for="password">Password</label>
                </div>
            </div>
            <div class="row justify-content-center">
                    <div class="col-md">
                        <input type="password" name="password" id="password" placeholder="123456">
                    </div>
                </div>
            <div class="row justify-content-center">
                <div class="col-md">
                    <button type="submit">Create User</button>
                </div>
            </div>
        </div>
    </form>
    
    <a href="{{ route('users.index') }}">Return to user's list</a>
@endsection
