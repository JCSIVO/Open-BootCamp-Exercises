@extends('mails.partials.base')
@section('content')
<h2>{{  __('panel.emails.saludo', ['name' => $user->name],$user->locale) }}</h2>
<p>{{ __('panel.emails.contrasena cambiada',[], $user->locale) }}</p>
@endsection