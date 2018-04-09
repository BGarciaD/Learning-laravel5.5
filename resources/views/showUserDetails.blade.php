<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User's Details</title>
</head>
<body>
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
</body>
</html>