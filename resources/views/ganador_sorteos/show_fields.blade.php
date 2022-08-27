<!-- Usuario Id Field -->
<div class="col-sm-12">
    {!! Form::label('usuario_id', 'Usuario Id:') !!}
    <p>{{ $ganadorSorteo->usuario_id }}</p>
</div>

<!-- Created At Field -->
<div class="col-sm-12">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $ganadorSorteo->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="col-sm-12">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $ganadorSorteo->updated_at }}</p>
</div>

