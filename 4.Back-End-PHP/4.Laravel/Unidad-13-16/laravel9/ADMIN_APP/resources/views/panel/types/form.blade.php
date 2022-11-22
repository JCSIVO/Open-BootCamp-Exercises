@extends('panel.generals.base')

@if($id == null) 
@section('title', 'Crear nuevo tipo')
@else 
@section('title', 'Modificar tipo')
@endif

@section('header')
<nav>
    <a class="btn btn-light" href="{{ route('types.index') }}">
        <i class="fas fa-chevron-left"></i> Volver
    </a>
</nav>
@endsection

@section('main')
    <div class="container">
        <h3>Tipos de Usuarios / 
            @if($id == null) 
                Crear nuevo tipo
            @else 
                Modificar tipo
            @endif
        </h3>
        <div class="row justify-content-center">
            <div class="col-12 col-md-4">
                <form action="{{ route('types.save', ['id' => $id]) }}" method="POST">
                    @if ($id != null)
                    @method('PUT')
                        <input type="hidden" name="id" value="{{ $id }}" />
                    @endif
                    @csrf
                    <div class="form-group">
                        <label>Nombre</label>
                        <input class="form-control" type="text" name="label" value="{{ $record != null? $record['label']:'' }}" />
                    </div>
                    <button class="btn btn-success">Guardar</button> 
                </form>
            </div>
        </div>
    </div>
@endsection