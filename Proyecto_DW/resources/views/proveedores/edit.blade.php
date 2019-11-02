@extends('layouts.app')

@section('content')

<div class="col-sm-offset-3 col-sm-6">
    <div class="col-sm-offset-2 col-sm-8">
    <div class="panel-title">
        <h1>Detalle de Proveedores</h1>
    <br>
    </br>

    </div>
     </div>
    <!-- Bootstrap Boilerplate... -->

  

     <!-- New Task Form -->
    <form action="/proveedor/{{$proveedor->id}}/update" method="POST" >
            {{ csrf_field() }}

            <input type="hidden" name="_method" value="patch">



            <div class="form-group"> 
                <label for="id" class="col-sm-3 control-label">Identificador</label>
                <input type="text" name="id" value="{{$proveedor->id}}"  class="form-control">
            </div>


            <div class="form-group"> 
                <label for="nit" class="col-sm-3 control-label">NIT</label>
                <input type="text" name="nit" value="{{$proveedor->nit}}"  class="form-control">
            </div>


            <div class="form-group">
                <label for="nombres" class="col-sm-3 control-label">Nombres</label>
                <input type="text" name="nombres" value="{{$proveedor->nombres}}" class="form-control">
            </div>

            <div class="form-group">
                <label for="telefono" class="col-sm-3 control-label">Teléfono</label>
                <input type="text" name="telefono" value="{{$proveedor->telefono}}" class="form-control">
            </div>

            <div class="form-group">
                <label for="direccion" class="col-sm-3 control-label">Domicilio</label>
                <input type="text" name="direccion" value="{{$proveedor->direccion}}" class="form-control">
            </div>



            <!-- Add Task Button -->
            <div class="form-group">
            <div class="col-sm-offset-2 col-sm-8">
                <button type="submit" class="btn btn-default">
                <i class="fa fa-plus"></i> Actualizar Registro
            </button>

                <form  action="/proveedor/remove/{{$proveedor->id}}" method="POST" >
            {{ csrf_field() }}
            <button type="submit" class="btn btn-default">
             <input type="hidden" name="_method" value="delete">
             <input type="submit" value="Eliminar Registro">
            </button>
                </form>

            <button type="submit" class="btn btn-default">
                <form>
                 <a href="{{ '/proveedor' }}"> Regresar</a>
                </form> 
            </button>

                </div>
            </div>
      </form>
   
    </div>



@endsection 