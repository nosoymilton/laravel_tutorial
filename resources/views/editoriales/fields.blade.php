<!-- Editorial Field -->
<div class="form-group col-sm-6">
    {!! Form::label('editorial', 'Editorial:') !!}
    {!! Form::text('editorial', null, ['class' => 'form-control','maxlength' => 45,'maxlength' => 45]) !!}
</div>

<!-- Descripcion Field -->
<div class="form-group col-sm-6">
    {!! Form::label('descripcion', 'Descripción:') !!}
    {!! Form::text('descripcion', null, ['class' => 'form-control','maxlength' => 100,'maxlength' => 100]) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('editoriales.index') }}" class="btn btn-default">Cancelar</a>
</div>
