<div class="col-md-6">
    <div class="page-header">
        <h3>
            Busqueda de libros
            {!! Form::open( ['route' =>'libros.index', 'method' => 'GET', 'class' => 'form-inline pull-right']) !!}
                <div class="form-group">
                    {!! Form::text('titulo', old('titulo'), ['class' => 'form-control', 'placeholder' => 'Título']) !!}
                </div>
                {{-- <div class="form-group">
                    {!! Form::text('autores', old('autores'), ['class' => 'form-control', 'placeholder' => 'Autores']) !!}
                </div> --}}
                <div class="form-group">
                    <button type="submit" class="btn btn-default">
                        <span class="glyphicon glyphicon-search"></span>
                    </button>
                </div>
            {!! Form::close() !!}
        </h3>
    </div>
</div>

