<div class="table-responsive">
    <table class="table datatable" id="usuarios-table">
        <thead>
        <tr>
            <th>Ciudad</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Cedula</th>
            <th>Celular</th>
            <th>Correo</th>
            <th>Habeas Data</th>
        </tr>
        </thead>
        <tbody>
        @foreach($usuarios as $usuario)
            <tr>
                <td>{{ $usuario->ciudad->nombre }}</td>
                <td>{{ $usuario->nombre }}</td>
                <td>{{ $usuario->apellido }}</td>
                <td>{{ $usuario->cedula }}</td>
                <td>{{ $usuario->celular }}</td>
                <td>{{ $usuario->correo }}</td>
                <td>{{ $usuario->habeas_data==1?'SI':'NO' }}</td>
                
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
