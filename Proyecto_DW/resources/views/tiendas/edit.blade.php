@extends('layouts.app')

@section('content')

<div class="col-sm-offset-3 col-sm-6">
    <div class="col-sm-offset-5 col-sm-5">
    <div class="panel-title">
        <h1>Tiendas</h1>

    </div>
     </div>
    <!-- Bootstrap Boilerplate... -->


     <!-- New Task Form -->
    <form action="/tienda/{{$tienda->id}}/update" method="POST" >
            {{ csrf_field() }}

            <input type="hidden" name="_method" value="patch">


            <div class="form-group"> 
                <label for="tienda" class="col-sm-3 control-label">Nombre de la Tienda</label>
                <input type="text" name="tienda" value="{{$tienda->tienda}}"  class="form-control">
            </div>


            <div class="form-group"> 
                <label for="nombre" class="col-sm-3 control-label">Nombre Comercial</label>
                <input type="text" name="nombre" value="{{$tienda->nombre}}"  class="form-control">
            </div>


            <div class="form-group">
                <label for="nit" class="col-sm-3 control-label">NIT</label>
                <input type="text" name="nit" value="{{$tienda->nit}}" class="form-control">
            </div>

            <div class="form-group">
                <label for="encargado_id" class="col-sm-3 control-label">Nombre de Usuario</label>
                <input type="text" name="encargado_id" value="{{$tienda->encargado_id}}" class="form-control">
            </div>

            <div class="form-group">
                <label for="ubicacion" class="col-sm-3 control-label">Domicilio</label>
                <input type="text" name="ubicacion" value="{{$tienda->ubicacion}}" class="form-control">
            </div>

            <div class="form-group">
                <label for="capacidad" class="col-sm-3 control-label">Capacidad de Tienda</label>
                <input type="text" name="capacidad" value="{{$tienda->capacidad}}" class="form-control">
            </div>




            <!-- Add Task Button -->

                        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-8">
                <button type="submit" class="btn btn-default">
                <i class="fa fa-plus"></i> Actualizar Registro
            </button>
            
                <form  action="/tienda/remove/{{$tienda->id}}" method="POST" >
            {{ csrf_field() }}
            <button type="submit" class="btn btn-default">
             <input type="hidden" name="_method" value="delete">
             <input type="submit" value="Eliminar Registro">
            </button>
                </form>

            <button type="submit" class="btn btn-default">
                <form>
                 <a href="{{ '/tienda' }}"> Regresar</a>
                </form> 
            </button>

                </div>
            </div>
      </form>
   
    </div>



@endsection 