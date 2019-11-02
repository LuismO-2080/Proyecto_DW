@extends('layouts.app')

@section('content')

<div class="col-sm-offset-3 col-sm-6">
    <div class="col-sm-offset-2 col-sm-8">
    <div class="panel-title">
        <h1>Detalles del Producto</h1>
        <br>
    </br>

    </div>
     </div>
    <!-- Bootstrap Boilerplate... -->
    

     <!-- New Task Form -->
    <form action="/producto/{{$producto->id}}/update" method="POST" >
            {{ csrf_field() }}

            <input type="hidden" name="_method" value="patch">


            <div class="form-group"> 
                <label for="id" class="col-sm-3 control-label">Nombre de la Tienda</label>
                <input type="text" name="id" value="{{$producto->id}}"  class="form-control">
            </div>


            <div class="form-group"> 
                <label for="codigo" class="col-sm-3 control-label">Nombre Comercial</label>
                <input type="text" name="codigo" value="{{$producto->codigo}}"  class="form-control">
            </div>


            <div class="form-group">
                <label for="nombre" class="col-sm-3 control-label">NIT</label>
                <input type="text" name="nombre" value="{{$producto->nombre}}" class="form-control">
            </div>

            <div class="form-group">
                <label for="proveedor_id" class="col-sm-3 control-label">Nombre de Usuario</label>
                <input type="text" name="proveedor_id" value="{{$producto->proveedor_id}}" class="form-control">
            </div>

            <div class="form-group">
                <label for="ubicacion" class="col-sm-3 control-label">Domicilio</label>
                <input type="text" name="ubicacion" value="{{$producto->ubicacion}}" class="form-control">
            </div>

            <div class="form-group">
                <label for="costo" class="col-sm-3 control-label">Capacidad de Tienda</label>
                <input type="text" name="costo" value="{{$producto->costo}}" class="form-control">
            </div>

            <div class="form-group">
                <label for="precio_venta" class="col-sm-3 control-label">Capacidad de Tienda</label>
                <input type="text" name="precio_venta" value="{{$producto->precio_venta}}" class="form-control">
            </div>

            <div class="form-group">
                <label for="created_at" class="col-sm-3 control-label">Capacidad de Tienda</label>
                <input type="text" name="created_at" value="{{$producto->created_at}}" class="form-control">
            </div>




            <!-- Add Task Button -->
                        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-8">
                <button type="submit" class="btn btn-default">
                <i class="fa fa-plus"></i> Actualizar Registro
            </button>

                <form  action="/producto/remove/{{$producto->id}}" method="POST" >
            {{ csrf_field() }}
            <button type="submit" class="btn btn-default">
             <input type="hidden" name="_method" value="delete">
             <input type="submit" value="Eliminar Registro">
            </button>
                </form>

            <button type="submit" class="btn btn-default">
                <form>
                 <a href="{{ '/producto' }}"> Regresar</a>
                </form> 
            </button>

                </div>
            </div>
      </form>
   
    </div>



@endsection 