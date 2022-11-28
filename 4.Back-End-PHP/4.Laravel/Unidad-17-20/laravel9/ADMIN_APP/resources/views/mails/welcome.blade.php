@extends('mails.partials.base')
@section('content')
<h2>Hola {{ $user->name }}</h2>
<p> Bienvenido al sistemade gestión de usuarios del curso de Laravel 9</p>
<small>Esperemos que lo pases bien </small>
@endsection