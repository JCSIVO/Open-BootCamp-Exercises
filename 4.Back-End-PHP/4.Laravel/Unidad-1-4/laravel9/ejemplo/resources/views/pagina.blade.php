@php
$myName = "Jose";
$lecciones = [
    "Introducción",
    "Directorios",
    "Novedades",
    "<b>Compose</b>",
    "...."
]
@endphp
<!DOCTYPE html>
<html>
    <header>
        <title>{{ env('APP_NAME') }}</title>
        <link rel="stylesheet" href="{{ asset('css/style.css') }}" type="text/css" />
    </header>
    <body>
        <h1>Mi primera página</h1>
        <p>Esta es mi primera página hecha con Laravel 9</p>
        <p>Mi nombre es {{ $myName }} y estoy encantadp de ser alumno en esta clase</p>
        <h4>¿Qué hemos visto?</h4>
        <ul>
            @foreach ($lecciones as $l )
            <li>{!! $l !!}</li>
            @endforeach
        </ul>
        <script src="{{ asset('js/script.js') }}"> </script>
    </body>
</html>