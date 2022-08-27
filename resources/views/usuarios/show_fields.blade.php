<!-- Ciudad Id Field -->
<div class="col-sm-12">
    {!! Form::label('ciudad_id', 'Ciudad Id:') !!}
    <p>{{ $usuario->ciudad_id }}</p>
</div>

<!-- Nombre Field -->
<div class="col-sm-12">
    {!! Form::label('nombre', 'Nombre:') !!}
    <p>{{ $usuario->nombre }}</p>
</div>

<!-- Apellido Field -->
<div class="col-sm-12">
    {!! Form::label('apellido', 'Apellido:') !!}
    <p>{{ $usuario->apellido }}</p>
</div>

<!-- Cedula Field -->
<div class="col-sm-12">
    {!! Form::label('cedula', 'Cedula:') !!}
    <p>{{ $usuario->cedula }}</p>
</div>

<!-- Celular Field -->
<div class="col-sm-12">
    {!! Form::label('celular', 'Celular:') !!}
    <p>{{ $usuario->celular }}</p>
</div>

<!-- Correo Field -->
<div class="col-sm-12">
    {!! Form::label('correo', 'Correo:') !!}
    <p>{{ $usuario->correo }}</p>
</div>

<!-- Habeas Data Field -->
<div class="col-sm-12">
    {!! Form::label('habeas_data', 'Habeas Data:') !!}
    <p>{{ $usuario->habeas_data }}</p>
</div>

<!-- Created At Field -->
<div class="col-sm-12">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $usuario->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="col-sm-12">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $usuario->updated_at }}</p>
</div>

