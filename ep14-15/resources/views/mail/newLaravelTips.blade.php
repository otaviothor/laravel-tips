@component('mail::message')
<h1>Novo episódio do Laravel Tips</h1>

@component('mail::button', [
    'url' => 'https://laravel.com/docs/8.x',
    'color' => 'primary'
])
Documentação do Laravel v8
@endcomponent

@component('mail::panel')
Lorem ipsum dolor, sit amet consectetur adipisicing elit. In ab officia at, libero a dicta aliquam harum, vel dolore dignissimos adipisci assumenda asperiores hic veritatis? Qui eaque at quae rerum?
@endcomponent

@component('mail::table')
| Laravel       | Table         | Example  |
| ------------- |:-------------:| --------:|
| Col 2 is      | Centered      | $10      |
| Col 3 is      | Right-Aligned | $20      |
@endcomponent

<p>Opá {{$user->name}}, beleza ?</p>
@endcomponent
