@component('mail::message')
<h1>Novo episódio do Laravel Tips</h1>

@component('mail::button', [
    'url' => 'https://laravel.com/docs/8.x'
])
Documentação do Laravel v8
@endcomponent

<p>Opá {{$user->name}}, beleza ?</p>
@endcomponent
