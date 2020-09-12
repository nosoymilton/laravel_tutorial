<!-- Name Field -->
<div class="form-group">
    {!! Form::label('name', 'Nombre:') !!}
    <p>{{ $role->name }}</p>
</div>

<!-- Permissions Field -->
<div class="form-group">
    {!! Form::label('permissions', 'Permisos:') !!}
    <p>{{ implode(', ', $role->permissions->pluck('name')->toArray()) }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Creado el:') !!}
    <p>{{ $role->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Actualizado el:') !!}
    <p>{{ $role->updated_at }}</p>
</div>

