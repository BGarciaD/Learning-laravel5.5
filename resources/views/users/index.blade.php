@extends('layout')

@section('content')
<h1>{{ $title }}</h1>
        <hr>
        @if ($users->isNotEmpty())
            <ul>
                @foreach($users as $user)
                    <li>
                        {{$user->name}} - {{$user->email}}
                        <a href="{{ action('UserController@showUserDetails', [ 'id' => $user->id]) }}">Ver detalles</a>
                    </li>
                     
                @endforeach
            </ul>
        @else
            <p>No registered users</p>
        @endif 
@endsection

<?php 
    /*
    Another way to use the same logic
        <h1><?php echo e($title) ?></h1>
        <ul>
            <?php foreach($users as $user):?>
                <li><?= e($user) ?></li>
            <?php endforeach; ?>
        </ul>
    Now Using Blade. This already escapes variables
    We could also use @unless directive or @empty directive
    */
    ?>