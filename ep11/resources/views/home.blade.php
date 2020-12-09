<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Laravel + Bootstrap</title>

    <link rel="stylesheet" href="{{ asset('site/style.css') }}">
</head>
<body>

<div class="container py-5">
    <div class="alert alert-orange" role="alert">
        Um simples alerta primary. Olha só!
    </div>
    <div class="alert alert-secondary" role="alert">
        Um simples alerta secondary. Olha só!
    </div>
    <div class="alert alert-success" role="alert">
        Um simples alerta success. Olha só!
    </div>
    <div class="alert alert-danger" role="alert">
        Um simples alerta danger. Olha só!
    </div>
    <div class="alert alert-warning" role="alert">
        Um simples alerta warning. Olha só!
    </div>
    <div class="alert alert-info" role="alert">
        Um simples alerta info. Olha só!
    </div>
    <div class="alert alert-light" role="alert">
        Um simples alerta light. Olha só!
    </div>
    <div class="alert alert-dark" role="alert">
        Um simples alerta dark. Olha só!
    </div>
</div>


<script src="{{ asset('site/jquery.js') }}"></script>
<script src="{{ asset('site/bootstrap.js') }}"></script>

</body>
</html>
