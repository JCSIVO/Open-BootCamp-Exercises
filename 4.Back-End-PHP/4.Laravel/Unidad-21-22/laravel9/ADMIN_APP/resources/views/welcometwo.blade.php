<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Documento de prueba con vite</title>
    {{-- @vite('resources/css/app.css') --}}
</head>
<body>
    {{ $name }}
    <input id="email" name="email"/>
    <input id="password" name="password"/>
    <input class="number-box" name="number">
    <div id="app">
        <h1>Esto es una pruba</h1>
    </div>
    {{-- @vite('resources/js/app.js') --}}
</body>
</html>