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
    <p>{{ App\Models\Idiomas::find($libros->idiomas_ididiomas) }}</p>
</div>

<!-- Editoriales Ideditoriales Field -->
<div class="form-group">
    {!! Form::label('editoriales_ideditoriales', 'Editoriales Ideditoriales:') !!}
    <p>{{ App\Models\Editoriales::find($libros->editoriales_ideditoriales) }}</p>
</div>

<!-- Autores Field -->
<div class="form-group">
    {!! Form::label('autores', 'Autores:') !!}
    <p>{{ App\Models\Autores::find($libros->autores) }}</p>
</div>

<!-- Ejemplares Field -->
<div class="form-group">
    {!! Form::label('ejemplares', 'Ejemplares:') !!}
    <p>{{ App\Models\Ejemplares::find($libros->ejemplares) }}</p>
</div>

<!-- Categorias Field -->
<div class="form-group">
    {!! Form::label('categorias', 'Categorias:') !!}
    <p>{{ App\Models\Categorias::find($libros->categorias) }}</p>
</div>


