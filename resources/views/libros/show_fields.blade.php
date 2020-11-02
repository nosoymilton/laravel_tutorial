<!-- Isbn Field -->
<div class="form-group">
    {!! Form::label('isbn', 'ISBN:') !!}
    <p>{{ $libros->isbn }}</p>
</div>

<!-- Titulo Field -->
<div class="form-group">
    {!! Form::label('titulo', 'Título:') !!}
    <p>{{ $libros->titulo }}</p>
</div>

<!-- Numpaginas Field -->
<div class="form-group">
    {!! Form::label('numpaginas', 'N° Páginas:') !!}
    <p>{{ $libros->numpaginas }}</p>
</div>

<!-- Apublicacion Field -->
<div class="form-group">
    {!! Form::label('apublicacion', 'Año Publicación:') !!}
    <p>{{ $libros->apublicacion }}</p>
</div>

<!-- Idiomas Ididiomas Field -->
<div class="form-group">
    {!! Form::label('idiomas_ididiomas', 'Id Idioma:') !!}
    <p>{{ App\Models\Idiomas::find($libros->idiomas_ididiomas) }}</p>
</div>

<!-- Editoriales Ideditoriales Field -->
<div class="form-group">
    {!! Form::label('editoriales_ideditoriales', 'Id Editorial:') !!}
    <p>{{ App\Models\Editoriales::find($libros->editoriales_ideditoriales) }}</p>
</div>

<!-- Autores Field -->
<div class="form-group">
    {!! Form::label('autores', 'Autor:') !!}
    <p>{{ App\Models\Autores::find($libros->autores) }}</p>
</div>

<!-- Ejemplares Field -->
<div class="form-group">
    {!! Form::label('ejemplares', 'Ejemplares:') !!}
    <p>{{ App\Models\Ejemplares::find($libros->ejemplares) }}</p>
</div>

<!-- Categorias Field -->
<div class="form-group">
    {!! Form::label('categorias', 'Categorías:') !!}
    <p>{{ App\Models\Categorias::find($libros->categorias) }}</p>
</div>


