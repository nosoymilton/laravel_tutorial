<!-- Isbn Field -->
<div class="form-group">
    {!! Form::label('isbn', 'Isbn:') !!}
    <p>{{ $libros->isbn }}</p>
</div>

<!-- Titulo Field -->
<div class="form-group">
    {!! Form::label('titulo', 'Titulo:') !!}
    <p>{{ $libros->titulo }}</p>
</div>

<!-- Numpaginas Field -->
<div class="form-group">
    {!! Form::label('numpaginas', 'Numpaginas:') !!}
    <p>{{ $libros->numpaginas }}</p>
</div>

<!-- Apublicacion Field -->
<div class="form-group">
    {!! Form::label('apublicacion', 'Apublicacion:') !!}
    <p>{{ $libros->apublicacion }}</p>
</div>

<!-- Idiomas Ididiomas Field -->
<div class="form-group">
    {!! Form::label('idiomas_ididiomas', 'Idiomas Ididiomas:') !!}
    <p>{{ $libros->idiomas_ididiomas }}</p>
</div>

<!-- Editoriales Ideditoriales Field -->
<div class="form-group">
    {!! Form::label('editoriales_ideditoriales', 'Editoriales Ideditoriales:') !!}
    <p>{{ $libros->editoriales_ideditoriales }}</p>
</div>

