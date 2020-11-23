<!-- Ejemplares Idejemplarea Field -->
<div class="form-group">
    {!! Form::label('ejemplares_idejemplarea', 'Ejemplares Idejemplarea:') !!}
    <p>{{ $reservas->ejemplares_idejemplarea }}</p>
</div>

<!-- Id Idusuario Field -->
<div class="form-group">
    {!! Form::label('id_idusuario', 'Id Idusuario:') !!}
    <p>{{ $reservas->id_idusuario }}</p>
</div>

<!-- Fechareserva Field -->
<div class="form-group">
    {!! Form::label('fechareserva', 'Fechareserva:') !!}
    <p>{{ $reservas->fechareserva }}</p>
</div>

<!-- Prestado Field -->
<div class="form-group">
    {!! Form::label('prestado', 'Prestado:') !!}
    <p>{{ $reservas->prestado }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $reservas->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $reservas->updated_at }}</p>
</div>

