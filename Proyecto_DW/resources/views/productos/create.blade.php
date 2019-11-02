@extends('layouts.app')

@section('content')
<div class="col-sm-offset-2 col-sm-8">
    <div class="col-sm-offset-1 col-sm-10">
    <div class="panel-title">
        <h2>INGRESE LOS DATOS DEL NUEVO PRODUCTO</h2>
    </div>
    </div>

    <!-- Bootstrap Boilerplate... -->

    <div class="panel-body">
        <!-- Display Validation Errors -->
       
        <!-- New Task Form -->
        <form action="/producto/save" method="POST" >
            {{ csrf_field() }}

            <!-- Task Name -->
            <div class="form-group">
                <label for="codigo" class="col-sm-3 control-label">Código </label>
                <input type="text" name="codigo"  class="form-control">
            </div>

            <div class="form-group">
                <label for="nombre" class="col-sm-3 control-label">Nombre del Producto </label>
                <input type="text" name="nombre"  class="form-control">
            </div>

            <div class="form-group">
                <label for="proveedor_id" class="col-sm-3 control-label">Nombre del Proveedor </label>
                <input type="text" name="proveedor_id"  class="form-control">
            </div>

            <div class="form-group">
                <label for="ubicacion" class="col-sm-3 control-label">Dirección</label>
                <input type="text" name="ubicacion"  class="form-control">
            </div>

            <div class="form-group">
                <label for="costo" class="col-sm-3 control-label">Costo del Producto</label>
                <input type="text" name="costo"  class="form-control">
            </div>

            <div class="form-group">
                <label for="precio_venta" class="col-sm-3 control-label">Precio de Venta</label>
                <input type="text" name="precio_venta"  class="form-control">
            </div>


            <!-- Add Task Button -->
            <div class="form-group">
                <div class="col-sm-offset-4 col-sm-8">
                    <button type="submit" class="btn btn-default">
                        <i class="fa fa-plus"></i> Agregar Producto
                    </button>
                     <button type="submit" class="btn btn-default">
                        <a href="{{ url('/producto') }}">Regresar</a>
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>

    <!-- TODO: Current Tasks -->
@endsection