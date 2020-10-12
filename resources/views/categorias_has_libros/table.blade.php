<div class="table-responsive">
    <table class="table" id="categoriasHasLibros-table">
        <thead>
            <tr>
                <th>Libros Idlibros</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($categoriasHasLibros as $categoriasHasLibros)
            <tr>
                <td>{{ $categoriasHasLibros->libros_idlibros }}</td>
                <td>
                    {!! Form::open(['route' => ['categoriasHasLibros.destroy', $categoriasHasLibros->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('categoriasHasLibros.show', [$categoriasHasLibros->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('categoriasHasLibros.edit', [$categoriasHasLibros->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
