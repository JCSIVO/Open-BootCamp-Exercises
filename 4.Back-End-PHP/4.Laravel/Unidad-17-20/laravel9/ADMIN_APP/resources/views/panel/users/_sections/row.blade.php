<tr>
    <td>{{ $row->id }}</td>
    <td>{{ $row->name }}</td>
    <td>
        {{ $row->role_id->label }}
        @if($row->role_id->deleted_at != null)
        <br />(Eliminado)
        @endif
    </td>
    <td>
        @if($row->types)
            {{ $row->types->label }}
            @if($row->types->deleted_at != null)
            <br />(Eliminado)
            @endif
        @else
            No indicado
        @endif
    </td>
    <td>{{ $row->email }}</td>
    <td>{{ date('d/m/Y', strtotime($row->created_at)) }}</td>
    <td>{{ date('d/m/Y', strtotime($row->updated_at)) }}</td>
    <td width="300">
        @if(Authorization::check(3))
            <a class="btn btn-dark" href="{{ route('users.suplantate', ['id' => $row->id]) }}">Suplantar</a>
        @endif
        <a class="btn btn-success" href="{{ route('users.edit', ['id' => $row->id]) }}">Editar</a>
        <form class="d-inline-block" onsubmit="return confirm('¿Seguro que deseas eliminar este registro?')" id="logout" action="{{ route('users.delete', ['id' => $row->id]) }}" method="POST">
            @method('DELETE')
            @csrf
            <button class="btn btn-danger">Eliminar</button>
        </form>
    </td>
</tr>