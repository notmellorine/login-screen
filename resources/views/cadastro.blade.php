<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastro</title>
</head>
<body>

    <form action="/cadastrar-usuario" method="POST">
        @csrf
        <label for="">Nome:</label>
        <input type="text" name="name_user">
        <br><br>
        <label for="">E-mail:</label>
        <input type="email" name="email_user">
        <br><br>
        <label for="">Senha:</label>
        <input type="password" name="password_user">
        <br><br>
        <button>Cadastrar</button>
    </form>

</body>
</html>
