<div class="table-responsive mt-3">
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Perfil</th>
                <th>Tipo</th>
                <th>Email</th>
                <th>Fecha de creacion</th>
                <th>Fecha de actualización</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @each('panel.users._sections.row', $users, 'row')
            {{-- @foreach ($types as $t) --}}
                
        {{-- @endforeach --}}
        </tbody>
    </table>
</div>