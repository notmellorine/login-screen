<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
</head>
<body>

    <form action="/cadastrar-usuario" method="POST">
        @csrf
        <h1>The Register</h1>
        <label for="">Name:</label>
        <input type="text" name="name_user">
        <br><br>
        <label for="">E-mail:</label>
        <input type="email" name="email_user">
        <br><br>
        <label for="">Password:</label>
        <input type="password" name="password_user">
        <br><br>
        <button>Confirm</button>
    </form>
    <form action="/" method="GET">
    <button>Back</button>
    </form>

</body>
</html>
