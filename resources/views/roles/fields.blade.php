<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Nombre:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<!-- Permissions Field -->
<div class="form-group col-sm-6">
    {!! Form::label('permissions', 'Permisos:') !!}
    {!! Form::select('permissions', $permissionItems, null, ['multiple' => 'multiple', 'class' => 'form-control','name' => 'permissions[]']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('roles.index') }}" class="btn btn-default">Cancelar</a>
</div>
