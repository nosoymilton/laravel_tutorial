@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Sanciones
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">
            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'sanciones.store']) !!}

                        @include('sanciones.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
