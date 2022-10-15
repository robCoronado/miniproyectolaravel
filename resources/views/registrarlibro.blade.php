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

                    {{ __('REGISTRAR LIBRO') }}
                    {{ session('status') }}

                    <form action="{{route('guardarlibro')}}" method="POST">
                        @csrf
                        <label>
                            Nombre: <br>
                            <input name="nombre" type="text">
                        </label>
                        <label>
                            Genero: <br>
                            <input name="genero" type="text">
                        </label>
                        <label>
                            Editorial: <br>
                            <input name="editorial" type="text">
                        </label>
                        <button type="submit">Guardar</button>
                    </form>



                </div>
            </div>
        </div>
    </div>
</div>
@endsection
