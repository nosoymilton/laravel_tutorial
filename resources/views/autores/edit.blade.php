@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Autores
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($autores, ['route' => ['autores.update', $autores->idautores], 'method' => 'patch']) !!}

                        @include('autores.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection