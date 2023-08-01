@extends('panel.generals.base')

@section('title', 'tipos de usuarios')

@section('main')
<div class="container-fluid">  
    @if (Session::has('message'))
    <div class="alert alert-success">
        {{ Session::get('message') }}
    </div>
    @endif

<h3>Tipos de Usuarios</h3>
<a class="btn btn-primary" href="{{ route('types.create') }}">
    <i class="fas fa-plus"></i>Crear nuevo tipo
</a>
@include('panel.types._sections.table', ['types' => $types])
@endsection
