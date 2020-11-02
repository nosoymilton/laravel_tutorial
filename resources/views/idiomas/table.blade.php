<div class="table-responsive">
    <table class="table" id="idiomas-table">
        <thead>
            <tr>
                <th>Idioma</th>
                <th colspan="3">Acciones</th>
            </tr>
        </thead>
        <tbody>
        @foreach($idiomas as $idiomas)
            <tr>
                <td>{{ $idiomas->nombre }}</td>
                <td>
                    {!! Form::open(['route' => ['idiomas.destroy', $idiomas->ididiomas], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('idiomas.show', [$idiomas->ididiomas]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('idiomas.edit', [$idiomas->ididiomas]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('¿Estás seguro?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
