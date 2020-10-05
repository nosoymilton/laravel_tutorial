<div class="table-responsive">
    <table class="table" id="categorias-table">
        <thead>
            <tr>
                <th>Categoria</th>
        <th>Descripcion</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($categorias as $categorias)
            <tr>
                <td>{{ $categorias->categoria }}</td>
            <td>{{ $categorias->descripcion }}</td>
                <td>
                    {!! Form::open(['route' => ['categorias.destroy', $categorias->idcategorias], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('categorias.show', [$categorias->idcategorias]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('categorias.edit', [$categorias->idcategorias]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
