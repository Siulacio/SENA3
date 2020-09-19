@extends('app.dashboard')
@section('headers')
!-- DataTables -->
        <link href="{{asset('dashor/assets/plugins/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('dashor/assets/plugins/datatables/buttons.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
@endsection
@section('titulo-pagina')
    listado usuarios
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
                    <a href="{{url('/usuarios/nuevo')}}" class="btn btn-primary">Nuevo Usuario</a>
                    <hr>
                    <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                            <tr>
                                <td>Usuario</td>
                                <td>Nombres</td>
                                <td>Rol</td>
                                <td>Email</td>
                                <td>Acciones</td>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($usuarios as $usuario)
                                <tr>
                                    <td>{{$usuario->username}}</td>
                                    <td>{{$usuario->nombres}}</td>
                                    <td>{{$usuario->roles->nombre}}</td>
                                    <td>{{$usuario->email}}</td>
                                    <td>
                                        <a href="{{url('/usuarios/editar/'.$usuario->id)}}" ><i class="fas fa-edit" title="Editar Usuario"></i></a>
                                        @if ($usuario->estado == 1)
                                            <a href="{{url('/usuarios/estado/'.$usuario->id)}}" class="ml-2" ><i class="far fa-thumbs-up" title="Inactivar Usuario"></i></a>
                                        @else
                                            <a href="{{url('/usuarios/estado/'.$usuario->id)}}" class="ml-2" ><i class="far fa-thumbs-down" title="Activar Usuario"></i></a>                                            
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