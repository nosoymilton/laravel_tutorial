@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Autores Has Libros
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($autoresHasLibros, ['route' => ['autoresHasLibros.update', $autoresHasLibros->id], 'method' => 'patch']) !!}

                        @include('autores_has_libros.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection