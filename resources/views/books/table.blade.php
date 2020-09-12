<div class="table-responsive">
    <table class="table" id="books-table">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Email Autor</th>
                <th>Año Publicación</th>
                <th colspan="3">Acciones</th>
            </tr>
        </thead>
        <tbody>
        @foreach($books as $books)
            <tr>
                <td>{{ $books->name }}</td>
            <td>{{ $books->email_autor }}</td>
            <td>{{ $books->publication_year }}</td>
                <td>
                    {!! Form::open(['route' => ['books.destroy', $books->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        @can('view_books')
                            <a href="{{ route('books.show', [$books->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        @endcan
                        @can('edit_books', Model::class)
                            <a href="{{ route('books.edit', [$books->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        @endcan
                        @can('delete_books')
                            {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('¿Está segur@?')"]) !!}
                        @endcan
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
