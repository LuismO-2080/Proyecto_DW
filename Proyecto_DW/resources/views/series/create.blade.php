@extends('layouts.app')

@section('content')
<div class="col-sm-offset-2 col-sm-8">
    <div class="col-sm-offset-1 col-sm-10">
    <div class="panel-title">
        <h2>INGRESE LOS DATOS DE LA FACTURA</h2>
    </div>
    </div>

    <!-- Bootstrap Boilerplate... -->

    <div class="panel-body">
        
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <!-- Display Validation Errors -->
       
        <!-- New Task Form -->
        <form action="/serie/save" method="POST" >
            {{ csrf_field() }}

            <!-- Task Name -->

            <div class="form-group">
                <label for="serie" class="col-sm-3 control-label">Serie de Factura </label>
                <input type="text" name="serie"  class="form-control">
            </div>

            <div class="form-group">
                <label for="fecha" class="col-sm-3 control-label">Fecha </label>
                <input type="text" name="fecha"  class="form-control">
            </div>

            <div class="form-group">
                <label for="cliente" class="col-sm-3 control-label">Nombre del CLiente</label>
                <input type="text" name="cliente"  class="form-control">
            </div>

            <div class="form-group">
                <label for="nit" class="col-sm-3 control-label">NIT</label>
                <input type="text" name="nit" class="form-control">
            </div>

            <div class="form-group">
                <label for="direccion" class="col-sm-3 control-label">Dirección</label>
                <input type="text" name="direccion"  class="form-control">
            </div>

            <div class="form-group">
                <label for="cantidad" class="col-sm-3 control-label">Cantidad</label>
                <input type="text" name="cantidad"  class="form-control">
            </div>

            <div class="form-group">
                <label for="descripcion" class="col-sm-3 control-label">Descripción</label>
                <input type="text" name="descripcion"  class="form-control">
            </div>

            <div class="form-group">
                <label for="precio" class="col-sm-3 control-label">Precio</label>
                <input type="text" name="precio"  class="form-control">
            </div>

           <div class="form-group">
                <label for="monto" class="col-sm-3 control-label">Monto</label>
                <input type="text" name="monto"  class="form-control">
            </div>


            <!-- Add Task Button -->
            <div class="form-group">
                <div class="col-sm-offset-4 col-sm-8">
                    <button type="submit" class="btn btn-default">
                        <i class="fa fa-plus"></i> Agregar Factura
                    </button>
                     <button type="submit" class="btn btn-default">
                        <a href="{{ url('/serie') }}">Regresar</a>
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>

    <!-- TODO: Current Tasks -->
@endsection