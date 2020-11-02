<div class="container">
    <form method="get" action="{{ url('libros') }}">
        <div class="row">
            
            <div class="form-group col-md-3">
                {!! Form::label('titulo', 'Buscar por:') !!}
            </div>
            <div class="form-group col-md-3">
                
            </div>
            <div class="form-group col-md-3">
                <input type="search" name="search" value="{{ request('search') }}" class="form-control form-control-sm" placeholder="Buscar...">
            </div>
            <div class="form-group col-md-3">
                <button type="submit" class="btn btn-sm btn-primary">Buscar</button>
            </div>
            
        </div> 
    </form>
</div>

