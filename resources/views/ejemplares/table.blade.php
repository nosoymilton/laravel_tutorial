<div class="table-responsive">
    <table class="table" id="ejemplares-table">
        <thead>
            <tr>
                <th>Numeroejemplar</th>
        <th>Libros Idlibros</th>
                <th>Libros Idlibros</th>
        <th>Libros Idiomas Ididiomas</th>
        <th>Libros Editoriales Ideditoriales</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($ejemplares as $ejemplares)
            <tr>
                <td>{{ $ejemplares->numeroejemplar }}</td>
            <td>{{ $ejemplares->libros_idlibros }}</td>
                <td>
                    {!! Form::open(['route' => ['ejemplares.destroy', $ejemplares->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('ejemplares.show', [$ejemplares->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('ejemplares.edit', [$ejemplares->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                <td>{{ $ejemplares->libros_idlibros }}</td>
                <td>{{ $ejemplares->libros_idiomas_ididiomas }}</td>
                <td>{{ $ejemplares->libros_editoriales_ideditoriales }}</td>
                <td>
                    {!! Form::open(['route' => ['ejemplares.destroy', $ejemplares->idejemplares], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('ejemplares.show', [$ejemplares->idejemplares]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('ejemplares.edit', [$ejemplares->idejemplares]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
