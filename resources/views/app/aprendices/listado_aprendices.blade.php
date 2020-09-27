@extends('app.dashboard')
@section('headers')
!-- DataTables -->
        <link href="{{asset('dashor/assets/plugins/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('dashor/assets/plugins/datatables/buttons.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
        <!-- Responsive datatable examples -->
        <link href="{{asset('dashor/assets/plugins/datatables/responsive.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" /> 
@endsection
@section('titulo-pagina')
    listado aprendices
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
                    <a href="{{url('/aprendices/nuevo')}}" class="btn btn-primary">Nuevo Aprendiz</a>
                    <hr>
                    <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                            <tr>
                                <td>Tipo Documento</td>
                                <td># Documento</td>
                                <td>Primer Nombre</td>
                                <td>Segundo Nombre</td>
                                <td>Primer Apellido</td>
                                <td>Segundo Apellido</td>
                                <td>Fecha de Nacimiento</td>
                                <td>Tipo de Sangre</td>
                                <td>Sexo</td>
                                <td>Correo</td>
                                <td>Dirección</td>
                                <td>Teléfono</td>
                                <td>Nivel Sisben</td>
                                <td>Estado</td>
                                <td>Acciones</td>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($aprendices as $aprendiz)
                                <tr>
                                    <td>{{$aprendiz->documentos->nombre}}</td>
                                    <td>{{$aprendiz->documento}}</td>
                                    <td>{{$aprendiz->nombre1}}</td>
                                    <td>{{$aprendiz->nombre2}}</td>
                                    <td>{{$aprendiz->apellido1}}</td>
                                    <td>{{$aprendiz->apellido2}}</td>
                                    <td>{{$aprendiz->fecha_nac}}</td>
                                    <td>{{$aprendiz->sangre->nombre}}</td>
                                    <td>
                                        @if ($aprendiz->sexo == 1)
                                            Hombre
                                        @else
                                            Mujer
                                        @endif
                                            
                                    </td>
                                    <td>{{$aprendiz->correo}}</td>
                                    <td>{{$aprendiz->direccion}}</td>
                                    <td>{{$aprendiz->telefono}}</td>
                                    <td>{{$aprendiz->sisben->nombre}}</td>
                                    <td>
                                        @if ($aprendiz->estado == 1)
                                            Activo
                                        @else
                                            Inactivo
                                        @endif
                                    </td>
                                    <td>                                        
                                        <a href="{{url('/aprendices/editar/'.$aprendiz->id)}}" ><i class="fas fa-edit" title="Editar Aprendiz"></i></a>
                                        @if ($aprendiz->estado == 1)
                                            <a href="{{url('/aprendices/estado/'.$aprendiz->id)}}" class="ml-2" ><i class="far fa-check-circle" title="Aprendiz activo"></i></a>
                                        @else
                                            <a href="{{url('/aprendices/estado/'.$aprendiz->id)}}" class="ml-2" ><i class="far fa-times-circle" title="Aprendiz inactivo"></i></a>                                            
                                        @endif                                        
                                    </td>                               

                                </tr>                                
                            @endforeach
                            
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

    <!-- Responsive examples -->
    <script src="{{asset('dashor/assets/plugins/datatables/dataTables.responsive.min.js')}}"></script>
    <script src="{{asset('dashor/assets/plugins/datatables/responsive.bootstrap4.min.js')}}"></script>
    {{-- <script src="{{asset('dashor/assets/pages/datatables.init.js')}}"></script>  --}}
    <script>
        $(document).ready( function () {
            $('#datatable').DataTable({
                language:{
                    url: "{{ asset('dashor/assets/plugins/datatables/Spanish.json') }}" 
                },
                columnDefs: [
                    { responsivePriority: 1, targets: 0 },
                    { responsivePriority: 2, targets: -1 }
                ]
            });
        } );
    </script>
@endsection