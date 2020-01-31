@extends('layouts.admin')

@section('titulo', 'Administración | Editar noticia')
@section('titulo2', 'Noticias')

@section('breadcrumbs')
@endsection

@section('contenido')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">

                    <h3 class="card-title"> Editar noticia: {{$noticia->id}} </h3>
                    
                </div>
                <div class="card-body">
                    <form method="POST" action="#">
                            @csrf
                        <div class="form-group">

                            <label for="">Titulo</label>
                            <input type="text" value="{{$noticia->titulo}}" class="form-control" />
    
                        </div>
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
