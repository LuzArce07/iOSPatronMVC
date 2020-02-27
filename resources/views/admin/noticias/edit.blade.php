@extends('layouts.admin')

@section('titulo', 'Administración | Editar noticia')
@section('titulo2', 'Noticias')

@section('breadcrumbs')
@endsection

@section('contenido')

<a class="btn btn-success btn-sm" style="margin-left: 11px" href="{{route('noticias.index')}}">
    <i class="fas fa-arrow-left"></i>
        Volver a lista de noticias
</a>

<br/>
<br/>

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

                    <h3 class="card-title"> Editar noticia: {{$noticia->id}} </h3>
                    
                </div>
                <div class="card-body">
                    <form method="POST" enctype="multipart/form-data" action="{{route('noticias.update',$noticia->id)}}">

                            @csrf
                            @method('PUT')

                        <div class="form-group">

                            <label >Titulo</label>
                            <input name= "txtTitulo" type="text" value="{{$noticia->titulo}}" class="form-control" />
    
                        </div>

                        <div class="form-group" >
                            <label for="">Imagen de Portada</label>
                            <input type="file" name="imgPortada" class="form-control" />
                        
                        </div>

                        @if($noticia->portada)

                            <a href="/storage/portadas/{{$noticia->portada}}" target="_blank">
                                <img style="width: 50px; heigh: auto;" src="/storage/portadas/{{$noticia->portada}}" />
                            </a>

                        @else
                        
                            <p>No hay imagen cargada</p>

                        @endif

                        <div class="form-group">

                            <label >Cuerpo</label>
                            <textarea name="txtCuerpo" rows="12" class="form-control">{{$noticia->cuerpo}}</textarea>

                        </div>
                        <div class="form-group">

                            <button class="btn btn-primary">Actualizar</button>

                        </div>

                    </form>
                    
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
