<!DOCTYPE html>
<html>
    <head>
        <title>{{ env('APP_NAME') }} | Contacto</title>
        <meta charset="utf-8" />
    </head>
    <body>
        <h1>Mi página de Contacto</h1>
        <form action="/contacto" method="POST" autocomplete="off">
            @method('PUT') <!-- Este metodo tambien funciona con DELETE, OPTIONS, PATCH --> 
            @csrf
            <div>
                <label>Nombre</label>
                <input type="text" name="name" placeholder="Nombre" />
            </div>
            <div>
                <label>Correo Electronico</label>
                <input type="email" name="email" placeholder="Correo Electronico" />
            </div>
            <div>
                <label>Teléfono</label>
                <input type="tel" name="telefono" placeholder="Telefono" maxlength="9"/>
            </div>
            <div>
                <label>Consulta</label>
                <textarea name="consulta" placeholder="Consulta"></textarea>
            </div>
            <div>
                <button>Enviar</button>
            </div>
        </form>
    </body>
</html>