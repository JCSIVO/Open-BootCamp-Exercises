<nav>
    <span>
        {{ __('panel.header.hola',['name'=>Auth::user()->fullname]) }}
    </span>
    @if(Authorization::check(2))
        <a href="{{ route('campaing.index') }}">{{ __('panel.header.campanas') }}</a>
        <a href="{{ route('users.index') }}">{{ __('panel.header.usuarios') }}</a>
    @endif
    @if(Authorization::check(2))
    <a href="{{ route('roles.index') }}">{{ __('panel.header.perfiles') }}</a>
    @endif
    @if(Authorization::check(1))
    <a href="{{ route('types.index') }}">{{ __('panel.header.tipos') }}</a>
    @endif

    @if(Session::has('id_original'))
    <a class="btn btn-info" href="{{ route('return-to-user') }}">{{ __('panel.header.volver a tu usuario') }}</a>
    @endif

    <a class="btn btn-light" href="javascript:void(0)" onclick="document.getElementById('logout').submit()">{{ __('panel.header.cerrar sesion') }} <!--del usuario {{-- $saludation --}} <br /> Tu contraseña es {{-- $password --}} --></a>
    <form style="display: none" id="logout" action="{{ route('logout') }}" method="POST">
        @csrf
    </form>
</nav>