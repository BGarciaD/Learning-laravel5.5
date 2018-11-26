@extends('layout')

@section('title', "Create User")

@section('content')
    <h1>Edit User</h1>

    <div class="container">
       
            @if($errors->any())
                <div class="alert alert-danger">
                    <h6>¡¡Ooops...!!!</h6>
                </div>
            @endif
        <form method="POST" action="{{ url('/users/new') }}">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" class="form-control" placeholder="Alberto García" value="{{ old('name', $user->name) }}">
                @if($errors->has('name'))
                    <p class="alert alert-danger">{{ $errors->first('name') }}</p>
                @endif
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" class="form-control" placeholder="albertog@example.com" value="{{ old('email', $user->email) }}">
                @if($errors->has('email'))
                    <p class="alert alert-danger">{{ $errors->first('email') }}</p>
                @endif
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" class="form-control" placeholder="123456">
                @if($errors->has('password'))
                    <p class="alert alert-danger">{{ $errors->first('password', $user->password) }}</p>
                @endif
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
            <div class="form-group">
                <a class="btn btn-*" href="{{ route('users.index') }}">Return to user's list</a>
            </div>
    </form>
</div>
@endsection
