@extends('layouts.admin')

@section('titulo', 'Administración | Noticias')
@section('titulo2', 'Lista de Noticias')

@section('breadcrumbs')
@endsection

@section('contenido')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Lista de Noticias</h3>
                </div>
                <div class="card-body">
                    
                    <button class="btn btn-success">
                        <i class="fas fa-plus"></i>Agregar noticia
                    </button>
                    
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
                                            <button class="btn btn-warning">
                                                <i class="fas fa-edit"></i>
                                            </button>
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