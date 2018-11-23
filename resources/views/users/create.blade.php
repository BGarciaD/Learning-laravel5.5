@extends('layout')

@section('title', "Create User")

@section('content')
    <h1>Create user</h1>

    <div class="container">
       
            @if($errors->any())
                <div class="alert alert-danger">
                    <h6>¡¡Ooops...!!!</h6>
                </div>
            @endif
        <form method="POST" action="{{ url('/users/new') }}">
            {{ csrf_field() }}
             <div class="row justify-content-center">
                <div class="col-md">
                    <label for="name">Name</label>
                </div>
            </div>
            <div class="row justify-content-center">
                    <div class="col-md">
                        <input type="text" name="name" id="name" placeholder="Alberto García" value="{{ old('name') }}">
                        @if($errors->has('name'))
                            <p class="alert alert-danger">{{ $errors->first('name') }}</p>
                        @endif
                    </div>
                </div>
            <div class="row justify-content-center">
                <div class="col-md">
                    <label for="email">Email</label>
                </div>
            </div>
            <div class="row justify-content-center">
                    <div class="col-md">
                        <input type="email" name="email" id="email" placeholder="albertog@example.com" value="{{ old('email') }}">
                        @if($errors->has('email'))
                            <p class="alert alert-danger">{{ $errors->first('email') }}</p>
                        @endif
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
                        @if($errors->has('password'))
                            <p class="alert alert-danger">{{ $errors->first('password') }}</p>
                        @endif
                    </div>
                </div>
            <div class="row justify-content-center">
                <div class="col-md">
                    <button type="submit">Create User</button>
                </div>
            </div>
    </form>
</div>
    
    <a href="{{ route('users.index') }}">Return to user's list</a>
@endsection
