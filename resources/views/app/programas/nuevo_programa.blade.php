@extends('app.dashboard')

@section('titulo-pagina')
    Registro de programas
@endsection
@section('content')

    {{-- Validaciones para los errores --}}
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                <h4><i class="icon fa fa-warning"></i> Alerta!</h4>
                @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>    
                @endforeach
            </ul>
        </div>      
    @endif
    {{-- fin validaciones para los errores --}}

    <div class="row">
        <div class="col-12">
            <div class="card m-b-30">
                <div class="card-body">
                    {{-- propio de la vista --}}
                    <form action="{{url('/programas/guardar')}}" method="POST">
                        @csrf
                        @include('app.programas.formulario_programa')
                        <hr>
                        <div class="form-group row mr-3 align-center">
                        <hr>
                            <button type="submit" class="btn btn-primary">Guardar</button>
                            <a href="{{ asset('/usuarios/listado') }}" class="ml-1 btn btn-secondary">Regresar</a>
                        </div>
                    </form>
                    {{-- propio de la vista --}}
                </div>
            </div>
        </div>    
    </div>
@endsection
