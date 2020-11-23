<div class="table-responsive">
    <table class="table" id="reservas-table">
        <thead>
            <tr>
                <th>Ejemplares Idejemplarea</th>
        <th>Id Idusuario</th>
        <th>Fechareserva</th>
        <th>Prestado</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($reservas as $reservas)
            <tr>
                <td>{{ $reservas->ejemplares_idejemplarea }}</td>
            <td>{{ $reservas->id_idusuario }}</td>
            <td>{{ $reservas->fechareserva }}</td>
            <td>{{ $reservas->prestado }}</td>
                <td>
                    {!! Form::open(['route' => ['reservas.destroy', $reservas->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('reservas.show', [$reservas->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('reservas.edit', [$reservas->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
