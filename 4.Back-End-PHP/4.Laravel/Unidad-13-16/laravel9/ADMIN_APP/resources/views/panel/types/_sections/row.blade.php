<tr>
    <td>{{ $type['id'] }}</td>
    <td>{{ $type['label'] }}</td>
    <td>{{ date('d/m/Y', strtotime($type['created_at'])) }}</td>
    <td>{{ date('d/m/Y', strtotime($type['updated_at'])) }}</td>
    <td>
        <a class="btn btn-success" href="{{ route('types.edit', ['id' => $type['id']]) }}">Editar</a>
        <form onsubmit="return confirm('¿Seguro que deseas eliminar este registro?')" id="logout" action="{{ route('types.delete', ['id' => $type['id']]) }}" method="POST">
            @method('DELETE')
            @csrf
            <button class="btn btn-danger">Eliminar</button>
        </form>
    </td>
</tr>