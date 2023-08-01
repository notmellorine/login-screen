<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User Panel</title>
</head>
<body>

    <form action="/perfil-candidato/{id}" method="GET">
        <h2>Welcome!</h2>
        <label for="">Informations:</label>
        <p>Name: {{ $name }}</p>
        <p>E-mail: {{ $email }}</p>
    </form>
    <form action="/" method="GET">
    <button>Logout</button>
    </form>

</body>
</html>
