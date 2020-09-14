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

<!-- Fechapublicacion Field -->
<div class="form-group">
    {!! Form::label('fechapublicacion', 'Fechapublicacion:') !!}
    <p>{{ $libros->fechapublicacion }}</p>
</div>

