
<a href="javascript:void(0)" onclick="document.getElementById('logout').submit()">Cerrar Sesión</a>
<form style="display: none" id="logout" action="{{ route('logout') }}" method="POST">
    @csrf
</form>