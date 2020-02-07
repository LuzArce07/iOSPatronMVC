@extends('layouts.admin')

@section('titulo', 'Administración | Crear usuario')
@section('titulo2', 'Usuarios')

@section('breadcrumbs')
@endsection

@section('contenido')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">

                    <h3 class="card-title">Crear usuario</h3>
                    
                </div>
                <div class="card-body">
                    <!--<form method="POST" action="{{route('usuarios.store')}}">
                            @csrf-->
                        <div class="form-group">

                            <label for="">Nombre</label>
                            <input type="text" name="txtNombre" class="form-control" />
    
                        </div>
                        <div class="form-group">

                            <label for="">Correo</label>
                            <input type="email" name="txtCorreo" class="form-control" />
    
                        </div>
                        <div class="form-group">

                            <label for="">Contraseña</label>
                            <input type="password" name="txtContraseña" class="form-control" />
    
                        </div>
                        <div class="form-group">

                            <label for="">Confirmar contraseña</label>
                            <input type="password" name="txtContraseña" class="form-control" />
    
                        </div>
                        
                        <div class="form-group">

                            <button class="btn btn-primary">Guardar</button>

                        </div>

                    <!--</form>-->
                    
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
