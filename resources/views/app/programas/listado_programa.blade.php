@extends('app.dashboard')
@section('headers')
{{-- !-- DataTables --> --}}
        <link href="{{asset('dashor/assets/plugins/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('dashor/assets/plugins/datatables/buttons.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
@endsection
@section('titulo-pagina')
    listado Programas
@endsection
@section('content')
    {{-- Bloque de mensajes --}}
    @if (session('status'))
        <div class="alert alert-success">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
            {!! session('status') !!}
        </div>
    @endif
    {{-- fin bloque mensajes --}}
    <div class="row">
        <div class="col-12">
            <div class="card m-b-30">
                <div class="card-body">
                    {{-- propio de la vista --}}
                    <a href="{{url('/programas/nuevo')}}" class="btn btn-primary">Nuevo Programa</a>
                    <hr>
                    <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                            <tr>
                                <td>Codigo</td>
                                <td>Nombre</td>
                                <td>Inicio</td>
                                <td>Cierre</td>
                                <td>Tipo</td>
                                <td>Duracion (Hrs)</td>
                                <td>Estado</td>
                                <td>Acciones</td>
                            </tr>
                        </thead>
                        <tbody>
                           @foreach ($programas as $programa)
                                <tr>
                                    <td>{{$programa->codigo}}</td>
                                    <td>{{$programa->nombre}}</td>
                                    <td>{{$programa->fecha_inicio}}</td>
                                    <td>{{$programa->fecha_cierre}}</td>
                                    <td>
                                        @if ($programa->tipo == 0)
                                            Técnico
                                        @else
                                            Tecnólogo
                                        @endif
                                    </td>
                                    <td>{{$programa->duracion}}</td>
                                    <td>
                                        @if ($programa->estado == 1)
                                            Activo
                                        @else
                                            Inactivo
                                        @endif
                                    </td>
                                    <td>                                        
                                        <a href="{{url('/programas/editar/'.$programa->id)}}" ><i class="fas fa-edit" title="Editar Programa"></i></a>
                                        @if ($programa->estado == 1)
                                            <a href="{{url('/programas/estado/'.$programa->id)}}" class="ml-2" ><i class="far fa-check-circle" title="Programa activo"></i></a>
                                        @else
                                            <a href="{{url('/programas/estado/'.$programa->id)}}" class="ml-2" ><i class="far fa-times-circle" title="Programa inactivo"></i></a>                                            
                                        @endif                                        
                                    </td>
                                </tr>   
                           @endforeach
                            {{-- <tr>
                                <td>codigo</td>
                                <td>Nombre</td>
                                <td>inicio</td>
                                <td>cierre</td>
                                <td>tipo</td>
                                <td>duracion</td>
                                <td>acciones</td>
                             </tr> --}}
                        </tbody>
                    </table>
                    {{-- propio de la vista --}}
                </div>
            </div>
        </div>    
    </div>
@endsection
@section('librerias')
    <script src="{{asset('dashor/assets/plugins/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('dashor/assets/plugins/datatables/dataTables.bootstrap4.min.js')}}"></script>
    {{-- <script src="{{asset('dashor/assets/pages/datatables.init.js')}}"></script>  --}}
    <script>
        $(document).ready( function () {
            $('#datatable').DataTable({
                language:{
                    url: "{{ asset('dashor/assets/plugins/datatables/Spanish.json') }}" 
                }
            });
        } );
    </script>
@endsection