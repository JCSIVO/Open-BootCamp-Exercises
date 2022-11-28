<!DOCTYPE html>
<html>
    <head>
        <title>{{ env('APP_NAME') }}</title>
        <meta charset="utf-8" />
    </head>
    <body>
        <header>
            <nav>
                <a href="{{ route('website.who') }}">¿Quién soy?</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <a href="{{ route('website.contact') }}">Contacto</a> 
            </nav>
        </header>
        <h1>Hola {{ $user }}</h1>
        <h3>Bienvenido a mi primera página hecha con Laravel {{ env('APP_LARAVEL_VERSION') }}.</h3>
        <h4>Estas visitando esta página el día {{ $date }} a las {{ $time }}</h4>
        <h4>El nombre de esta aplicación es {{ env('APP_NAME') }} y en este momento se encuentra en el entorno de &quot;{{ env('APP_ENV') }}&quot;</h4>
        @if ($user == 'Usuario')
        <h2>Rellena tu nombre para personalizar la página</h2>
        @else
        <h2>Si no te llamas {{ $user }} rellena el formulario para cambiar tu nombre </h2>
        @endif
        <form action="{{ route('website.personalize') }}" method="POST" autocomplete="off">
            @csrf
            <input type="text" name="name" placeholder="Nombre" value= {{ $user }} />
            <button>Personalizar</button>
        </form>
    </body>
</html>