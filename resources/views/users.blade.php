<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Users List</title>
</head>
<body>
    <h1>{{ $title }}</h1>
    <hr>
    @if (! empty($users))
        <ul>
            @foreach($users as $user)
                <li>{{ $user }}</li>
            @endforeach
        </ul>
    @else
        <p>No registered users</p>
    @endif    
</body>
</html>