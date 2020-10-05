<div class="table-responsive">
    <table class="table" id="libros-table">
        <thead>
            <tr>
                <th>ISBN</th>
                <th>Título</th>
                <th>N° páginas</th>
                <th>Año de publicación</th>
                <th>Idioma</th>
                <th>Editorial</th>
                <th>Autor</th>
                <th>Ejemplares</th>
                <th colspan="3">Acciones</th>
            </tr>
        </thead>
        <tbody>
        @foreach($libros as $libros)
            <tr>
                <td>{{ $libros->isbn }}</td>
                <td>{{ $libros->titulo }}</td>
                <td>{{ $libros->numpaginas }}</td>
                <td>{{ $libros->apublicacion }}</td>
                <td>{{ $libros->idiomas_ididiomas }}</td>
                <td>{{ $libros->editoriales_ideditoriales }}</td>
                <td>
                    {!! Form::open(['route' => ['libros.destroy', $libros->idlibros], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('libros.show', [$libros->idlibros]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('libros.edit', [$libros->idlibros]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
