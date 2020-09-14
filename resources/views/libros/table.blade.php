<div class="table-responsive">
    <table class="table" id="libros-table">
        <thead>
            <tr>
                <th>Isbn</th>
        <th>Titulo</th>
        <th>Numpaginas</th>
        <th>Fechapublicacion</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($libros as $libros)
            <tr>
                <td>{{ $libros->isbn }}</td>
            <td>{{ $libros->titulo }}</td>
            <td>{{ $libros->numpaginas }}</td>
            <td>{{ $libros->fechapublicacion }}</td>
                <td>
                    {!! Form::open(['route' => ['libros.destroy', $libros->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('libros.show', [$libros->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('libros.edit', [$libros->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
