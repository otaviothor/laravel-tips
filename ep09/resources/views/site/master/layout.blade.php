<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://getbootstrap.com.br/docs/4.1/examples/carousel/carousel.css">

    <title>Olá, mundo!</title>
</head>
<body>

<header>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <a class="navbar-brand" href="#">UpInside </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link {{ (Route::current()->getName() === 'site.home' ? 'active' : '') }}" href="{{ route('site.home') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ (Route::current()->getName() === 'site.courses' ? 'active' : '') }}" href="{{ route('site.courses') }}">Cursos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ (Route::current()->getName() === 'site.contact ' ? 'active' : '') }}" href="{{ route('site.contact') }}">Contato</a>
                </li>
            </ul>
            <form class="form-inline mt-2 mt-md-0">
                <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Pesquisar</button>
            </form>
        </div>
    </nav>
</header>

<main role="main">

    @yield('content')

    <footer class="container">
        <p class="float-right"><a href="#">Voltar ao topo</a></p>
        <p>&copy; {{ date('Y') }} &middot; <a href="#">Privacidade</a> &middot; <a href="#">Termos</a></p>
    </footer>
</main>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<script src="https://getbootstrap.com.br/docs/4.1/assets/js/vendor/holder.min.js"></script>
</body>
</html>
