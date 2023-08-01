
<div class="alert alert-danger">
    No tienes acceso a esta sección 
</div>
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

        
  