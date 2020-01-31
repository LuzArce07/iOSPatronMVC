@extends('layouts.admin')

@section('titulo', 'Administración | Noticias')
@section('titulo2', 'Lista de Noticias')

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
                <div class="alert alert-success alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <h5><i class="icon fas fa-check"></i> ¡ERROR!</h5>
                    {{Session::get('error')}}
                </div>
            @endif

            
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Lista de Noticias</h3>
                </div>
                <div class="card-body">
                    
                    <a href="{{route('noticias.create')}}" class="btn btn-success">
                        <i class="fas fa-plus"></i>Agregar noticia
                    </a>
                    
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Noticias</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>

                                <!-- Aqui van las noticias -->

                                @foreach($noticias as $noticia)
                                    <tr>
                                        <td>{{$noticia->titulo}}</td>
                                        <td>
                                            <button class="btn btn-primary">
                                                <i class="fas fa-eye"></i>
                                            </button>
                                            <a href="{{route('noticias.edit', $noticia->id)}}" class="btn btn-warning">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                            <button class="btn btn-danger">
                                                <i class="fas fa-times"></i>
                                            </button>
                                        </td>
                                    </tr>
                                @endforeach

                            </tr>
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