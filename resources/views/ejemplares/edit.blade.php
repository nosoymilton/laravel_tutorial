@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Ejemplares
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($ejemplares, ['route' => ['ejemplares.update', $ejemplares->id], 'method' => 'patch']) !!}

                        @include('ejemplares.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection