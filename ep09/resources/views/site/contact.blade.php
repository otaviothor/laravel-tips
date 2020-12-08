@extends('site.master.layout')

@section('content')
    <div class="jumbotron">
        <div class="container">
            <h1 class="display-4">Contato</h1>
            <hr class="my-4">
            <p class="lead">Nossa equipe está sempre à disposição para lhe ajudar! Entre em contato e retornaremos o mais breve possível!</p>
        </div>
    </div>
    <div class="container py-5">
        <form>
            <div class="form-group">
                <label for="name">Nome</label>
                <input type="text" class="form-control" id="name" placeholder="Nome">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" class="form-control" id="email" placeholder="Seu email">
            </div>
            <div class="form-group">
                <label for="content">Conteúdo</label>
                <textarea class="form-control" id="content" rows="3"></textarea>
            </div>
            <button type="submit" class="btn btn-outline-dark">Enviar</button>
        </form>
    </div>
@endsection
