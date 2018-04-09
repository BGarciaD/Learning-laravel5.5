<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editing User</title>
</head>
<body>
    <h1>Editing User</h1>
    <form action="" method="POST">
        <fieldset>
            <legend>User's Data</legend>
            <label for="userName">Name:</br>
                <input type="text" name="name" id="userName" value="{{ $user['name'] }}">
            </label>
        </br>
        <label for="userLastName">Last Name:</br>
            <input type="text" name="lastName" id="userLastName" value="{{ $user['lastName'] }}">
        </label>
        </br>
        <label for="userAge">Age:</br>
            <input type="text" name="age" id="userAge" value="{{ $user['age'] }}">
        </label>
        </br>
        <label for="userHeight">Height:</br>
            <input type="text" name="height" id="userHeight" value="{{ $user['height'] }}">
        </label>
        </br>
        <label for="userCity">City:</br>
            <input type="text" name="city" id="userCity" value="{{ $user['city'] }}">
        </label>
        <br>
        <input type="submit" value="Edit">
        </fieldset>
    </form>
</body>
</html>