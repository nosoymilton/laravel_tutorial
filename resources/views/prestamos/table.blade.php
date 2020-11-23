<div class="table-responsive">
    <table class="table" id="prestamos-table">
        <thead>
            <tr>
                
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($prestamos as $prestamos)
            <tr>
                
                <td>
                    {!! Form::open(['route' => ['prestamos.destroy', $prestamos->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('prestamos.show', [$prestamos->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('prestamos.edit', [$prestamos->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
