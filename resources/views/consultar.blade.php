@extends('layouts.plantillatarea')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Consultar Los Libros') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('CONSULTAR LIBROS') }}
                    {{ session('status') }}

                    <table class="table col-12">
                        <thread>

                                <tr>

                                    <td><b>NOMBRE</b></td>
                                    <td><b>GENERO</b></td>
                                    <td><b>EDITORIAL</b></td>
                                    <td><b>ACCION</b></td>
                                    <td><b>ACCION</b></td>

                                </tr>

                    </thread>
                        <tbody>
                            @foreach($libros as $libro)

                            <tr>
                                <td>{{$libro->nombre}}</td>
                                <td>{{$libro->genero}}</td>
                                <td>{{$libro->editorial}}</td>
                                <td>
                                <a href="{{route('eliminarlibro',$libro->id)}}" class="btn btn-danger">Borrar</a>
                                </td>
                                <td>
                                <a href="{{route('modilibro',$libro->id)}}" class="btn btn-success">Modificar</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection

