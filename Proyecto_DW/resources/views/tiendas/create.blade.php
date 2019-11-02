@extends('layouts.app')

@section('content')
<div class="col-sm-offset-2 col-sm-8">
    <div class="col-sm-offset-1 col-sm-10">
    <div class="panel-title">
        <h2>INGRESE LOS DATOS DE LA NUEVA TIENDA</h2>
    </div>
    </div>

    <!-- Bootstrap Boilerplate... -->

    <div class="panel-body">
        
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <!-- Display Validation Errors -->
       
        <!-- New Task Form -->
        <form action="/tienda/save" method="POST" >
            {{ csrf_field() }}

            <!-- Task Name -->
            <div class="form-group">
                <label for="tienda" class="col-sm-3 control-label">Nombre de la Tienda </label>
                <input type="text" name="tienda"  class="form-control">
            </div>

            <div class="form-group">
                <label for="nombre" class="col-sm-3 control-label">Nombre Comercial </label>
                <input type="text" name="nombre"  class="form-control">
            </div>

            <div class="form-group">
                <label for="nit" class="col-sm-3 control-label">NIT </label>
                <input type="text" name="nit"  class="form-control">
            </div>

            <div class="form-group">
                <label for="encargado_id" class="col-sm-3 control-label">Nombre de Encargado</label>
                <input type="text" name="encargado_id"  class="form-control">
            </div>

            <div class="form-group">
                <label for="ubicacion" class="col-sm-3 control-label">Domicilio de Tienda</label>
                <input type="text" name="ubicacion" class="form-control">
            </div>

            <div class="form-group">
                <label for="capacidad" class="col-sm-3 control-label">Capacidad de Tienda</label>
                <input type="text" name="capacidad"  class="form-control">
            </div>


            <!-- Add Task Button -->
            <div class="form-group">
                <div class="col-sm-offset-4 col-sm-8">
                    <button type="submit" class="btn btn-default">
                        <i class="fa fa-plus"></i> Agregar Tienda
                    </button>
                     <button type="submit" class="btn btn-default">
                        <a href="{{ url('/tienda') }}">Regresar</a>
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>

    <!-- TODO: Current Tasks -->
@endsection