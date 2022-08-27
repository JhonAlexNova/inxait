<div class="table-responsive">
    <table class="table" id="ganadorSorteos-table">
        <thead>
        <tr>
            <th>Usuario Id</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($ganadorSorteos as $ganadorSorteo)
            <tr>
                <td>{{ $ganadorSorteo->usuario_id }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['ganadorSorteos.destroy', $ganadorSorteo->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('ganadorSorteos.show', [$ganadorSorteo->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('ganadorSorteos.edit', [$ganadorSorteo->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-edit"></i>
                        </a>
                        {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
