@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Idiomas
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($idiomas, ['route' => ['idiomas.update', $idiomas->ididiomas], 'method' => 'patch']) !!}

                        @include('idiomas.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection