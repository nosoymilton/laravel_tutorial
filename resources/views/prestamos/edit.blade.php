@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Prestamos
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($prestamos, ['route' => ['prestamos.update', $prestamos->id], 'method' => 'patch']) !!}

                        @include('prestamos.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection