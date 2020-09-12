<!-- Name Field -->
<div class="form-group">
    {!! Form::label('name', 'Nombre:') !!}
    <p>{{ $books->name }}</p>
</div>

<!-- Email Autor Field -->
<div class="form-group">
    {!! Form::label('email_autor', 'Email Autor:') !!}
    <p>{{ $books->email_autor }}</p>
</div>

<!-- Publication Year Field -->
<div class="form-group">
    {!! Form::label('publication_year', 'Año de Publicación:') !!}
    <p>{{ $books->publication_year }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Creado el:') !!}
    <p>{{ $books->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Actualizado el:') !!}
    <p>{{ $books->updated_at }}</p>
</div>

