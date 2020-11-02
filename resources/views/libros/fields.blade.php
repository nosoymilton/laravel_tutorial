<!-- Isbn Field -->
<div class="form-group col-sm-6">
    {!! Form::label('isbn', 'ISBN:') !!}
    {!! Form::text('isbn', null, ['class' => 'form-control','maxlength' => 13,'maxlength' => 13]) !!}
</div>

<!-- Titulo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('titulo', 'Título:') !!}
    {!! Form::text('titulo', null, ['class' => 'form-control','maxlength' => 100,'maxlength' => 100]) !!}
</div>

<!-- Numpaginas Field -->
<div class="form-group col-sm-6">
    {!! Form::label('numpaginas', 'N° de páginas:') !!}
    {!! Form::number('numpaginas', null, ['class' => 'form-control']) !!}
</div>

<!-- Apublicacion Field -->
<div class="form-group col-sm-6">
    {!! Form::label('apublicacion', 'Año de publicación:') !!}
    {!! Form::text('apublicacion', null, ['class' => 'form-control','id'=>'apublicacion']) !!}
</div>

@push('scripts')
    <script type="text/javascript">
        $('#apublicacion').datetimepicker({
            format: 'YYYY',
            useCurrent: false,
            sideBySide: true
        })
    </script>
@endpush

<!-- Idiomas Ididiomas Field -->
{{--<div class="form-group col-sm-6">
    {!! Form::label('idiomas_ididiomas', 'Idioma:') !!}
    {!! Form::number('idiomas_ididiomas', null, ['class' => 'form-control']) !!}
</div>

<!-- Editoriales Ideditoriales Field -->
<div class="form-group col-sm-6">
    {!! Form::label('editoriales_ideditoriales', 'Editorial:') !!}
    {!! Form::number('editoriales_ideditoriales', null, ['class' => 'form-control']) !!}
</div>--}}
<!-- Editoriales Ideditoriales Field -->

<div class="form-group col-sm-6">
    <label for="idiomas_ididiomas">Idioma:</label>
    <select name="idiomas_ididiomas" id="idiomas_ididiomas" class="form-control">
        @foreach (App\Models\Idiomas::all() as $idiomas)
            <option value="{{ $idiomas->ididiomas }}">{{ $idiomas->nombre }}</option>
        @endforeach
    </select>
</div>

<div class="form-group col-sm-6">
    <label for="editoriales_ideditoriales">Editorial:</label>
    <select name="editoriales_ideditoriales" id="editoriales_ideditoriales" class="form-control">
        @foreach (App\Models\Editoriales::all() as $editoriales)
            <option value="{{ $editoriales->ideditoriales }}">{{ $editoriales->editorial }}</option>
        @endforeach
    </select>
</div>


<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('libros.index') }}" class="btn btn-default">Cancelar</a>
</div>
