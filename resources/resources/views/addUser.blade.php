<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel Tips</title>
</head>
<body>

    <a href="{{route("user.index")}}">Voltar</a>

    <form action="{{route("user.store")}}" method="post">
        @csrf
        <p>
            <input type="text" name="name" placeholder="Nome">
        </p>
        <p>
            <input type="text" name="email" placeholder="E-mail">
        </p>
        <p>
            <input type="text" name="password" placeholder="Senha">
        </p>
        <p>
            <input type="submit" value="Cadastrar usuário">
        </p>
    </form>

</body>
</html>
