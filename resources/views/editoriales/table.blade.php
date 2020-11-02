<div class="table-responsive">
    <table class="table" id="editoriales-table">
        <thead>
            <tr>
                <th>Editorial</th>
                <th>Descripción</th>
                <th colspan="3">Acciones</th>
            </tr>
        </thead>
        <tbody>
        @foreach($editoriales as $editoriales)
            <tr>
                <td>{{ $editoriales->editorial }}</td>
                <td>{{ $editoriales->descripcion }}</td>
                <td>
                    {!! Form::open(['route' => ['editoriales.destroy', $editoriales->ideditoriales], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('editoriales.show', [$editoriales->ideditoriales]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('editoriales.edit', [$editoriales->ideditoriales]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('¿Está segur@?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
