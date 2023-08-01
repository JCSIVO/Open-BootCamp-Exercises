@extends('panel.generals.base')

@if($id == null) 
@section('title', 'Crear nuevo usuario')
@else 
@section('title', 'Modificar usuario')
@endif

@section('header')
<nav>
    <a class="btn btn-light" href="{{ route('users.index') }}">
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
                Modificar a {{ $record->name }}
            @endif
        </h3>
        <div class="row justify-content-center">
            <div class="col-12 col-md-4">
                <form action="{{ route($prefix.'.save', ['id' => $id]) }}" method="POST">
                    @if ($id != null)
                    @method('PUT')
                        <input type="hidden" name="id" value="{{ $id }}" />
                    @endif
                    @csrf
                    <div class="form-group">
                        <label>Nombre</label>
                        <input class="form-control" type="text" name="name" value="{{ $record != null? $record->name:'' }}" />
                    </div>
                    <div class="form-group">
                        <label>Perfil</label>
                        <select class="form-control" name="role_id">
                            @foreach ($roles as $r)
                                <option value="{{ $r->id }}" @if($record != null && $record->role_id == $r->id) selected @endif>{{ $r->label }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Tipo de usuario</label>
                        <select class="form-control" name="type_id">
                            <option value="">Tipo de Usuario</option>
                            @foreach ($types as $t)
                                <option value="{{ $t->id }}" @if($record != null && $record->type_id == $t->id) selected @endif>{{ $t->label }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input class="form-control" type="text" name="email" value="{{ $record != null?$record->email:'' }}" />
                    </div>
                    <div class="form-group">
                        <label>Idioma</label>
                        <select class="form-control" name="local">
                            <option value="es" @if($record != null && $record->locale == 'es') selected @endif>Español</option>
                            <option value="en" @if($record != null && $record->locale == 'en') selected @endif>Ingles</option>
                        </select>
                    </div>
                    @if(Auth::id() == $record->id || Authorization::check(3))
                    <div class="form-group">
                        <label>Password actual</label>
                        <input class="form-control" type="password" name="actual_password" />
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input class="form-control" type="password" name="password" />
                    </div>
                    @endif
                    <div class="form-group">
                        <button class="btn btn-success">Guardar</button>
                    </div> 
                </form>
            </div>
        </div>
    </div>
@endsection