<div class="table-responsive mt-3">
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Fecha de creacion</th>
                <th>Fecha de actualización</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @each('panel.roles._sections.row', $row, 'row')
            {{-- @foreach ($row as $r)
                @include('panel.roles._sections.row', ['row' => $r]) <!--includeWhen tepermite poner una condicion -->
        @endforeach --}}
        </tbody>
    </table>
</div>