<!-- Idioma Field -->
<div class="form-group col-sm-6">
    {!! Form::label('idioma', 'Idioma:') !!}
    {!! Form::text('idioma', null, ['class' => 'form-control','maxlength' => 45,'maxlength' => 45]) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('idiomas.index') }}" class="btn btn-default">Cancelar</a>
</div>
