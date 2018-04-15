@extends('layout')

@section('title', "Usuario {$user['id']}")

@section('content')
    <h1>User's Details</h1>
        <p>Showing user's details: {{ $user['id'] }}</p>
        @if (! empty($user))
            <ul>
                @foreach($user as $key => $value)
                    @if ($key !== 'id')
                        <li>{{ $key . ' : ' . $value }}</li>
                    @endif
                @endforeach
            </ul>
        @else
            <p>No data available</p>
        @endif  
@endsection

@section('sidebar')
    <h2>Customized Sidebar</h2>
@endsection