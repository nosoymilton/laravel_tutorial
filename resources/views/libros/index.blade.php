@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1 class="pull-left">Libros</h1>
    <hr>
    </section>



    <div class="content">
        <div class="clearfix"></div>

        <div class="row">
            @include('libros.busqueda')
        </div>
   
        @can('crear_libros')
        <h1 class="pull-right">
           <a class="btn btn-primary pull-right" style="margin-top: -10px;margin-bottom: 5px" href="{{ route('libros.create') }}">Crear Libro</a>
        </h1>
        @endcan
                
        @include('flash::message')

        <div class="clearfix"></div>

        @can('catalogo_libros')
        <div class="row">
            @include('libros.grid')
        </div>
        <div class="pull-right">{{ $libros->links() }}</div>
        <div class="clearfix"></div>
            
        @endcan
        @can('tabla_libros')    
        <div class="box box-primary">
            <div class="box-body">
                    @include('libros.table')
            </div>
        </div>
        <div class="pull-right">{{ $libros->links() }}</div>
        <div class="clearfix"></div>
        @endcan
        <div class="text-center">
        </div>

    </div>
@endsection

    

