@extends('panel.generals.base')

@section('title', 'Campañas')

@section('main')
<div class="container-fluid">  
    @if (Session::has('message'))
    <div class="alert alert-success">
        {{ Session::get('message') }}
    </div>
    @endif

<h3>Campañas</h3>
<a class="btn btn-primary" href="{{ route('users.create') }}">
    <i class="fas fa-plus"></i>Crear nueva Campañas
</a>
<table class="mt-3 table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Titulo</th>
            <th>Receptores</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($campaings as $c )
        <tr>
            <td>{{ $c->id }}</td>
            <td>{{ $c->title }}</td>
            <td>{{ $c->receptors_count }}</td>
        </tr>
        @endforeach
    </tbody>
</table>

{{ $campaings->onEachSide(3)->links(/*'pagination.view'*/) }}

@endsection