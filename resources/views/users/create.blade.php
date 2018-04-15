<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>New user created</title>
</head>
<body>
    <h1>New user created</h1>
    @if (! empty($user))
        <ul>User's Data
            @foreach($user as $key => $value)
                @if ($key !== 'id')
                    <li>{{ $key . ' : ' . $value }}</li>
                @endif
            @endforeach
        </ul>
    @else
        <p>No data available</p>
    @endif
    </ul>
</body>
</html>