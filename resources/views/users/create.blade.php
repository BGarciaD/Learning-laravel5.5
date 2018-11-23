@extends('layout')

@section('title', "Create User")

@section('content')
    <h1>Create user</h1>

    <div class="container">
       
            @if($errors->any())
                <div class="alert alert-danger">
                    <h6>¡¡Ooops...There's some errors!!!</h6>
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
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
                    </div>
                </div>
            <div class="row justify-content-center">
                <div class="col-md">
                    <label for="email">Email</label>
                </div>
            </div>
            <div class="row justify-content-center">
                    <div class="col-md">
                        <input type="email" name="email" id="email" placeholder="albertogarcia@gmail.com" value="{{ old('email') }}">
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
    </form>
</div>
    
    <a href="{{ route('users.index') }}">Return to user's list</a>
@endsection
