<!-- Numeroejemplar Field -->
<div class="form-group col-sm-6">
    {!! Form::label('numeroejemplar', 'Numeroejemplar:') !!}
    {!! Form::text('numeroejemplar', null, ['class' => 'form-control','maxlength' => 45,'maxlength' => 45]) !!}
</div>

<!-- Libros Idlibros Field -->
<div class="form-group col-sm-6">
    {!! Form::label('libros_idlibros', 'Libros Idlibros:') !!}
    {!! Form::number('libros_idlibros', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('ejemplares.index') }}" class="btn btn-default">Cancel</a>
</div>
