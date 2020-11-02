<!-- Nombres Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nombres', 'Nombres:') !!}
    {!! Form::text('nombres', null, ['class' => 'form-control','maxlength' => 45,'maxlength' => 45]) !!}
</div>

<!-- Apellidopaterno Field -->
<div class="form-group col-sm-6">
    {!! Form::label('apellidopaterno', 'Apellido Paterno:') !!}
    {!! Form::text('apellidopaterno', null, ['class' => 'form-control','maxlength' => 45,'maxlength' => 45]) !!}
</div>

<!-- Apellidomaterno Field -->
<div class="form-group col-sm-6">
    {!! Form::label('apellidomaterno', 'Apellido Materno:') !!}
    {!! Form::text('apellidomaterno', null, ['class' => 'form-control','maxlength' => 45,'maxlength' => 45]) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('autores.index') }}" class="btn btn-default">Cancel</a>
</div>
