<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Screen</title>
</head>
<body>

    <form action="/login" method="POST">
        <h1>The Registrable Site</h1>
        @csrf
        <label for="">E-mail:</label>
        <br>
        <input type="email" placeholder="Insert your e-mail..." name="email_user">
        <br><br>
        <label for="">Password:</label>
        <br>
        <input type="password" placeholder="Insira your password..." name="password_user">
        <br><br>
        <button>Send</button>
        <br><br>
        <label for="">Not registred? Register </label>
        <a href="/cadastro">here</a>.
    </form>

</body>
</html>
