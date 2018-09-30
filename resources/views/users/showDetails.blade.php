@extends('layout')

@section('title', "Usuario {$user['id']}")

@section('content')
    <h1>User's Details</h1>
        <p>Showing {{ $user->name }}'s details</p>
        @if (! empty($user))
            <ul>
                <li>Id: {{$user->id}}</li>
            </ul>
        @else
            <p>No data available</p>
        @endif  
@endsection

@section('sidebar')
    <h2>Customized Sidebar</h2>
@endsection