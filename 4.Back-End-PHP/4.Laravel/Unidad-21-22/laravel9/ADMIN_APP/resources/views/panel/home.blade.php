@extends('panel.generals.base')

@section('title', 'DashBoard')

@section('main')
<div class="container">
    <h3>Dashboard</h3>
    <ul class="list-unstyled">
        @if(Authorization::check(2))
            <li><a href="{{ route('users.index') }}">Usuarios</a></li>
        @endif
        @if(Authorization::check(2))
        <li><a href="{{ route('roles.index') }}">Perfiles</a></li>
        @endif
        @if(Authorization::check(1))
        <li><a href="{{ route('types.index') }}">Tipos</a></li>
        @endif
    </ul>
</div>
    
@endsection