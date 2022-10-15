@extends('layouts.plantillatarea')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('EDITAR LIBRO') }}
                    {{ session('status') }}

                    <form action="{{route('editlibro', $libros->id)}}" method="POST">
                        @csrf
                        <label>
                            Nombre: <br>
                            <input name="nombre" type="text" value="{{$libros->nombre}}">
                        </label>
                        <label>
                            Genero: <br>
                            <input name="genero" type="text" value="{{$libros->genero}}">
                        </label>
                        <label>
                            Editorial: <br>
                            <input name="editorial" type="text" value="{{$libros->editorial}}">
                        </label>
                        <button type="submit" class="btn btn-primary">Guardar Cambios</button>
                    </form>



                </div>
            </div>
        </div>
    </div>
</div>
@endsection

