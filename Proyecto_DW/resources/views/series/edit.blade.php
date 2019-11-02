@extends('layouts.app')

@section('content')

<div class="col-sm-offset-3 col-sm-6">
    <div class="col-sm-offset-5 col-sm-5">
    <div class="panel-title">
        <h1>Facturación</h1>

    </div>
     </div>
    <!-- Bootstrap Boilerplate... -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">




    

     <!-- New Task Form -->
    <form action="/serie/{{$serie->id}}/update" method="POST" >
            {{ csrf_field() }}

            <input type="hidden" name="_method" value="patch">


            <div class="form-group"> 
                <label for="serie" class="col-sm-3 control-label">Número de Factura</label>
                <input type="text" name="serie" value="{{$serie->serie}}"  class="form-control">
            </div>


            <div class="form-group"> 
                <label for="fecha" class="col-sm-3 control-label">Fecha</label>
                <input type="text" name="fecha" value="{{$serie->fecha}}"  class="form-control">
            </div>


            <div class="form-group">
                <label for="cliente" class="col-sm-3 control-label">Cliente</label>
                <input type="text" name="cliente" value="{{$serie->cliente}}" class="form-control">
            </div>

            <div class="form-group">
                <label for="nit" class="col-sm-3 control-label">NIT</label>
                <input type="text" name="nit" value="{{$serie->nit}}" class="form-control">
            </div>

            <div class="form-group">
                <label for="direccion" class="col-sm-3 control-label">Domicilio</label>
                <input type="text" name="direccion" value="{{$serie->direccion}}" class="form-control">
            </div>

            <div class="form-group">
                <label for="cantidad" class="col-sm-3 control-label">Cantidad</label>
                <input type="text" name="cantidad" value="{{$serie->cantidad}}" class="form-control">
            </div>

            <div class="form-group">
                <label for="descripcion" class="col-sm-3 control-label">Descripción</label>
                <input type="text" name="descripcion" value="{{$serie->descripcion}}" class="form-control">
            </div>

            <div class="form-group">
                <label for="precio" class="col-sm-3 control-label">Precio</label>
                <input type="text" name="precio" value="{{$serie->precio}}" class="form-control">
            </div>

            <div class="form-group">
                <label for="monto" class="col-sm-3 control-label">Monto</label>
                <input type="text" name="monto" value="{{$serie->monto}}" class="form-control">
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
            <a type="button" class="btn btn-secondary" href="{{ '/serie' }}">REGRESAR</a>
                </form> 
            </button>

                </div>
            </div>
      </form>
   
    </div>



@endsection 