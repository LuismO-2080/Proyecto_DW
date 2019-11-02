@extends('layouts.app')

@section('content')
<div class="col-sm-offset-2 col-sm-8">
    <div class="col-sm-offset-1 col-sm-10">
    <div class="panel-title">
        <h2>INGRESE LOS DATOS DEL NUEVO PROVEEDOR</h2>
    </div>
    </div>

    <!-- Bootstrap Boilerplate... -->

    <div class="panel-body">
        <!-- Display Validation Errors -->
       
        <!-- New Task Form -->
        <form action="/proveedor/save" method="POST" >
            {{ csrf_field() }}

            <!-- Task Name -->
            <div class="form-group">
                <label for="nit" class="col-sm-3 control-label">NIT del Proveedor </label>
                <input type="text" name="nit"  class="form-control">
            </div>

            <div class="form-group">
                <label for="nombres" class="col-sm-3 control-label">Nombre del Proveedor </label>
                <input type="text" name="nombres"  class="form-control">
            </div>

            <div class="form-group">
                <label for="telefono" class="col-sm-3 control-label">Telefono </label>
                <input type="text" name="telefono"  class="form-control">
            </div>

            <div class="form-group">
                <label for="direccion" class="col-sm-3 control-label">Dirección</label>
                <input type="text" name="direccion"  class="form-control">
            </div>


            <!-- Add Task Button -->
            <div class="form-group">
                <div class="col-sm-offset-4 col-sm-8">
                    <button type="submit" class="btn btn-default">
                        <i class="fa fa-plus"></i> Agregar Proveedor
                    </button>
                     <button type="submit" class="btn btn-default">
                        <a href="{{ url('/proveedor') }}">Regresar</a>
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>

    <!-- TODO: Current Tasks -->
@endsection