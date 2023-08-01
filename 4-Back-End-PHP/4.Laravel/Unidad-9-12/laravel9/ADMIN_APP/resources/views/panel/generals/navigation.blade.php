<nav>
    <a class="btn btn-light" href="javascript:void(0)" onclick="document.getElementById('logout').submit()">Cerrar Sesión <!--del usuario {{-- $saludation --}} <br /> Tu contraseña es {{-- $password --}} --></a>
    <form style="display: none" id="logout" action="{{ route('logout') }}" method="POST">
        @csrf
    </form>
</nav>