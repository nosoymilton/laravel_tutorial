<!-- Isbn Field -->
<div class="form-group col-sm-6">
    {!! Form::label('isbn', 'Isbn:') !!}
    {!! Form::text('isbn', null, ['class' => 'form-control','maxlength' => 13,'maxlength' => 13]) !!}
</div>

<!-- Titulo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('titulo', 'Titulo:') !!}
    {!! Form::text('titulo', null, ['class' => 'form-control','maxlength' => 100,'maxlength' => 100]) !!}
</div>

<!-- Numpaginas Field -->
<div class="form-group col-sm-6">
    {!! Form::label('numpaginas', 'Numpaginas:') !!}
    {!! Form::text('numpaginas', null, ['class' => 'form-control','maxlength' => 45,'maxlength' => 45]) !!}
</div>

<!-- Fechapublicacion Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fechapublicacion', 'Fechapublicacion:') !!}
    {!! Form::text('fechapublicacion', null, ['class' => 'form-control','id'=>'fechapublicacion']) !!}
</div>

@push('scripts')
    <script type="text/javascript">
        $('#fechapublicacion').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: true,
            sideBySide: true
        })
    </script>
@endpush

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('libros.index') }}" class="btn btn-default">Cancel</a>
</div>
