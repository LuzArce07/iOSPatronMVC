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
                <div class="alert alert-danger alert-dismissible">
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

                                            <form method="POST" action="{{route('noticias.destroy', $noticia->id)}}">

                                                @csrf
                                                @method('DELETE')
                                                
                                                <!-- BOTON DE SHOW -->

                                                <a href="{{route('noticias.show', $noticia->id)}}" class="btn btn-primary">
                                                    <i class="fas fa-eye"></i>
                                                </a>

                                                <!-- BOTON DE EDIT -->

                                                <a href="{{route('noticias.edit', $noticia->id)}}" class="btn btn-warning">
                                                    <i class="fas fa-edit"></i>
                                                </a>

                                                <!-- BOTON DE DELETE -->

                                                <button type="button" class="btn btn-danger"  data-toggle="modal" data-target="#DeleteModal">
                                                    <i class="fas fa-times"></i>
                                                </button>

                                                <div id="DeleteModal" class="modal fade text-danger" role="dialog">
                                                    <div class="modal-dialog ">
                                                        <!-- Modal content-->
                                                        <form action="" id="deleteForm" method="post">
                                                            <div class="modal-content">
                                                                <div class="modal-header bg-danger">
                                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                                    <h4 class="modal-title text-center">DELETE CONFIRMATION</h4>
                                                                </div>
                                                                <div class="modal-body">
                                                                    @csrf
                                                                    @method('DELETE')
                                                                    <p class="text-center">¿Estas seguro que quieres eliminar?</p>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    
                                                                        <button type="button" class="btn btn-success" data-dismiss="modal">Cancelar</button>
                                                                        <button type="submit" name="" class="btn btn-danger" data-dismiss="modal" onclick="formSubmit()">Si, Eliminar</button>
                                                                    
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                    </div>
                                                

                                            </form>

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
<script type="text/javascript">
     function deleteData(id)
     {
         var id = id;
         var url = '{{ route("noticias.destroy", ":id") }}';
         url = url.replace(':id', id);
         $("#DeleteModal").attr('action', url);
     }

     function formSubmit()
     {
         $("#DeleteModal").submit();
     }
  </script>
@endsection

@section('estilos')
@endsection