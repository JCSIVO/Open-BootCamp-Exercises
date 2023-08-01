@extends('panel.generals.base')

@section('title', 'Roles')

@section('main')  
<div class="container">  
    @if (Session::has('message'))
    <div class="alert alert-success">
        {{ Session::get('message') }}
    </div>
    @endif

    <h3>Roles de Usuarios</h3>
    <a class="btn btn-primary" href="{{ route('roles.create') }}">
        <i class="fas fa-plus"></i> Crear nuevo rol    
    </a>

   
    {{-- @includeWhen(count($roles) > 4, 'panel.roles._sections.table', ['row' => $roles]) condicion tiene que ser + --}}
    {{-- @includeUnless(count($roles) > 4, 'panel.roles._sections.table', ['row' => $roles]) Condicion tiene que ser negativa--}}

    {{--@include('panel.roles._sections.table', ['row' => $roles])--}}
     {{-- @includeIf('panel.roles._sections.table', ['row' => $roles]) --}}


     @includeFirst(['_sections.table', 'panel.roles._sections.table'], ['row' => $roles])
</div>
@endsection