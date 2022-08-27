<div class="table-responsive">
    <table class="table datatable" id="ganadorSorteos-table">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Cedula</th>
                <th>Celular</th>
                <th>Correo</th>
                <td>Fecha y hora </td>
            </tr>
        </thead>
        <tbody>
        @foreach($ganadores as $ganadorSorteo)
            <tr>
                <td>{{ $ganadorSorteo->usuario->nombre }}</td>
                <td>{{ $ganadorSorteo->usuario->apellido }}</td>
                <td>{{ $ganadorSorteo->usuario->cedula }}</td>
                <td>{{ $ganadorSorteo->usuario->celular }}</td>
                <td>{{ $ganadorSorteo->usuario->correo }}</td>
                <td>{{ $ganadorSorteo->created_at }}</td>

               
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
