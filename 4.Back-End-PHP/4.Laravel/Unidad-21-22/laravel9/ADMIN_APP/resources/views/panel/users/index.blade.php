@extends('panel.generals.base')

@section('title', 'Usuarios')

@section('main')
<div class="container-fluid">  
    @if (Session::has('message'))
    <div class="alert alert-success">
        {{ Session::get('message') }}
    </div>
    @endif

<h3>Usuarios</h3>
<a class="btn btn-primary" href="{{ route('users.create') }}">
    <i class="fas fa-plus"></i>Crear nuevo usuario
</a>
@include('panel.users._sections.table', ['users' => $users])

{{ $users->onEachSide(3)->links(/*'pagination.view'*/) }}

@endsection