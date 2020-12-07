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


    <form action="{{route('debug')}}" method="post">
        @csrf
        <p>
            <input type="text" name="title" placeholder="Título">
        </p>
        <p>
            <input type="text" name="subtitle" placeholder="Subtítulo">
        </p>
        <p>
            <textarea name="content" placeholder="Conteúdo" cols="30" rows="10"></textarea>
        </p>
        <p>
            <input type="submit" value="Criar Post">
        </p>
    </form>

</body>
</html>
