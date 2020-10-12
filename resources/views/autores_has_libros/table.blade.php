<div class="table-responsive">
    <table class="table" id="autoresHasLibros-table">
        <thead>
            <tr>
                <th>Libros Idlibros</th>
                <th>Libros Idiomas Ididiomas</th>
                <th>Libros Editoriales Ideditoriales</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($autoresHasLibros as $autoresHasLibros)
            <tr>
                <td>{{ $autoresHasLibros->libros_idlibros }}</td>
                <td>{{ $autoresHasLibros->libros_idiomas_ididiomas }}</td>
                <td>{{ $autoresHasLibros->libros_editoriales_ideditoriales }}</td>
                <td>
                    {!! Form::open(['route' => ['autoresHasLibros.destroy', $autoresHasLibros->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('autoresHasLibros.show', [$autoresHasLibros->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('autoresHasLibros.edit', [$autoresHasLibros->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
