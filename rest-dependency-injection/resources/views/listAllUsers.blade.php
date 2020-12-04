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

    <a href="{{route("users.formAddUser")}}">Novo</a>

    <table>
        <tr>
            <td>id</td>
            <td>nome</td>
            <td>e-mail</td>
            <td>ações</td>
        </tr>

        @foreach ($users as $user)
        <tr>
            <td>{{$user->id}}</td>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td>
                <a href="{{route("users.listUser", $user->id)}}">Ver usuário</a>
                <a href="{{route("users.formEditUser", $user->id)}}">Editar usuário</a>
                <form action="{{route("users.delete", $user->id)}}" method="post">
                    @csrf
                    @method("DELETE")
                    <input type="hidden" name="user" value="{{$user->id}}">
                    <input type="submit" value="Remover">
                </form>
            </td>
        </tr>
        @endforeach
    </table>

</body>
</html>
