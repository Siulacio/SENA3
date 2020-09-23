@extends('app.dashboard')
@section('headers')
!-- DataTables -->
        <link href="{{asset('dashor/assets/plugins/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('dashor/assets/plugins/datatables/buttons.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
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
                    <a href="{{url('/aprendices/nuevo')}}" class="btn btn-primary">Nuevo Aprendices</a>
                    <hr>
                    <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                            <tr>
                                <td>Tipo Documento</td>
                                <td>Primer Nombre</td>
                                <td>Segundo Nombre</td>
                                <td>Primer Apellido</td>
                                <td>Segundo Apellido</td>
                                <td>Fecha de Nacimiento</td>
                                <td>Tipo de Sangre</td>
                                <td>Sexo</td>
                                <td>Email</td>
                                <td>Dirección</td>
                                <td>Teléfono</td>
                                <td>Nivel Sisben</td>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($aprendices as $aprendices)
                                <tr>
                                    <td>{{$aprendices->tipo_doc}}</td>
                                    <td>{{$aprendices->nombre1}}</td>
                                    <td>{{$aprendices->nombre2}}</td>
                                    <td>{{$aprendices->apellido1}}</td>
                                    <td>{{$aprendices->apellido2}}</td>
                                    <td>{{$aprendices->fecha_nac}}</td>
                                    <td>{{$aprendices->tipo_sangre}}</td>
                                    <td>{{$aprendices->sexo}}</td>
                                    <td>{{$aprendices->correo}}</td>
                                    <td>{{$aprendices->direccion}}</td>
                                    <td>{{$aprendices->telefono}}</td>
                                    <td>{{$aprendices->nivel_sisben}}</td>
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