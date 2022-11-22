<tr>
    <td>{{ $row['id'] }}</td>
    <td>{{ $row['name'] }}</td>
    <td>{{ $row['email'] }}</td>
    <td>{{ date('d/m/Y', strtotime($row['created_at'])) }}</td>
    <td>{{ date('d/m/Y', strtotime($row['updated_at'])) }}</td>
    <td>
        <a class="btn btn-success" href="{{ route('users.edit', ['id' => $row['id']]) }}">Editar</a>
        <form onsubmit="return confirm('¿Seguro que deseas eliminar este registro?')" id="logout" action="{{ route('users.delete', ['id' => $row['id']]) }}" method="POST">
            @method('DELETE')
            @csrf
            <button class="btn btn-danger">Eliminar</button>
        </form>
    </td>
</tr>