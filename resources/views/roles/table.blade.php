<div class="table-responsive">
    <table class="table" id="roles-table">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Permisos</th>
                <th colspan="3">Acciones</th>
            </tr>
        </thead>
        <tbody>
        @foreach($roles as $role)
            <tr>
                <td>{{ $role->name }}</td>
                <td>{{ implode(", ",$role->permissions->pluck('name')->toArray())  }}</td>
                <td>
                    {!! Form::open(['route' => ['roles.destroy', $role->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        @can('ver_roles')
                            <a href="{{ route('roles.show', [$role->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>    
                        @endcan
                        @can('editar_roles')
                            <a href="{{ route('roles.edit', [$role->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>    
                        @endcan
                        @can('eliminar_roles')
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
