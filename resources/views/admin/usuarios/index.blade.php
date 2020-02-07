@extends('layouts.admin')

@section('titulo', 'Administración | Usuarios')
@section('titulo2', 'Usuarios')

@section('breadcrumbs')
@endsection

@section('contenido')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">

        @if(Session::has('exito'))
                <div class="alert alert-success alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <h5><i class="icon fas fa-check"></i> ¡EXITO!</h5>
                    {{Session::get('exito')}}
                </div>
            @endif

            @if(Session::has('error'))
                <div class="alert alert-danger alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <h5><i class="icon fas fa-check"></i> ¡ERROR!</h5>
                    {{Session::get('error')}}
                </div>
            @endif

            <div class="card">

                <div class="card-header">
                    <h3 class="card-title">Lista de usuarios</h3>
                </div>

                <div class="card-body">

                    <a href="{{route('usuarios.create')}}" class="btn btn-success">
                        <i class="fas fa-plus"></i>Agregar Usuarios
                    </a>
                    
                <table class="table">

                        <thead>
                            <tr>
                                <th>Usuarios</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>

                        <tbody>

                            <!-- Aquí van las noticias -->

                            @foreach($usuarios as $usuario)

                                <tr>
                                    <td>{{$usuario->name}}</td>

                                    <td>
                                        

                                            <a href="#" class="btn btn-primary">
                                                <i class="fas fa-eye"></i>
                                            </a>

                                            <a href="#" class="btn btn-success">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                            
                                                

                                            <a href="#" class="btn btn-danger">
                                                <i class="fas fa-times"></i>
                                            </a>
                                        
                                    </td>

                                </tr>

                            @endforeach
                            
                        </tbody>
                    </table>

                </div>

            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
@endsection

@section('estilos')
@endsection