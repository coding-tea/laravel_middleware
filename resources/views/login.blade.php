<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>login</title>
</head>
<body>
    <h1>login</h1>
    <form action="" method="POST">
        @csrf
        username : <input type="text" name="username" /> <br>
        password : <input type="text" name="password" /> <br>
        <input type="submit" value="login" />
    </form>
</body>
</html>