@extends('layout')

@section('title', "Create User")

@section('content')
    <h1>Create user</h1>

    <form method="POST" action="{{ url('/users/create') }}">
        <button type="submit">Create User</button>
    </form>
    
    <a href="{{ route('users.index') }}">Return to user's list</a>
@endsection
