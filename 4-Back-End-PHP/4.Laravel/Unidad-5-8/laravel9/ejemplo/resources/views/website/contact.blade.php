<!DOCTYPE html>
<html>
    <head>
        <title>{{ env('APP_NAME') }}</title>
        <meta charset="utf-8" />
    </head>
    <body>
        <header>
            <nav>
                <a @if($section == 'who-we-are') style="color:green;" @endif href="{{ route('website.section',['section' => 'who-we-are']) }}">¿Quién soy?</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <a @if($section == 'contact') style="color:green;" @endif href="{{ route('website.section',['section' => 'contact']) }}">Contacto</a> 
            </nav>
        </header>
        <h1>Contacta conmigo</h1>
        <form action="{{ route('website.send-contact') }}" method="POST" autocomplete="off">
            @csrf
            <p>
                <input type="text" name="name" placeholder="Nombre" />
            </p>
            <p>
                <input type="text" name="email" placeholder="Email" />
            </p>
            <p>
                <textarea name="message" placeholder="Escribir message"></textarea>
            </p>
                <button>Enviar</button>
        </form>
    </body>
</html>