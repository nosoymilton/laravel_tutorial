<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Nombre:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<!-- Email Autor Field -->
<div class="form-group col-sm-6">
    {!! Form::label('email_autor', 'Email Autor:') !!}
    {!! Form::email('email_autor', null, ['class' => 'form-control']) !!}
</div>

<!-- Publication Year Field -->
<div class="form-group col-sm-6">
    {!! Form::label('publication_year', 'Año de Publicación:') !!}
    {!! Form::number('publication_year', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('books.index') }}" class="btn btn-default">Cancelar</a>
</div>
