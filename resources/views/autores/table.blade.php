<div class="table-responsive">
    <table class="table" id="autores-table">
        <thead>
            <tr>
                <th>Nombres</th>
        <th>Apellidopaterno</th>
        <th>Apellidomaterno</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($autores as $autores)
            <tr>
                <td>{{ $autores->nombres }}</td>
            <td>{{ $autores->apellidopaterno }}</td>
            <td>{{ $autores->apellidomaterno }}</td>
                <td>
                    {!! Form::open(['route' => ['autores.destroy', $autores->idautores], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('autores.show', [$autores->idautores]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('autores.edit', [$autores->idautores]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
