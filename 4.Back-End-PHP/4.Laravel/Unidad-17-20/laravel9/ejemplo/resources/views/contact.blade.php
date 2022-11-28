<!DOCTYPE html>
<html>
    <head>
        <title>{{ env('APP_NAME') }} | Contacto</title>
        <meta charset="utf-8" />
    </head>
    <body>
        <h1>Mi página de Contacto</h1>
        <form action="{{ route('process.contact') }}" method="POST" autocomplete="off">
            
            @csrf
            <div>
                <label>Nombre</label>
                <input type="text" name="name" placeholder="Nombre" value="{{ old('name') }}"/>
            </div>
            <div>
                <label>Correo Electronico</label>
                <input type="email" name="email" placeholder="Correo Electronico" value="{{ old('email') }}"/>
            </div>
            <div>
                <label>Teléfono</label>
                <input type="tel" name="phone" placeholder="Telefono" maxlength="9" value="{{ old('phone') }}"/>
            </div>
            <div>
                <label>Consulta</label>
                <textarea name="message" placeholder="Consulta">{{ old('message') }}</textarea>
            </div>
            <div>
                <button>Enviar</button>
            </div>
        </form>
    </body>
</html>