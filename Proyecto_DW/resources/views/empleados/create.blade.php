@extends('layouts.app')

@section('content')
<div class="col-sm-offset-2 col-sm-8">
    <div class="col-sm-offset-1 col-sm-10">
    <div class="panel-title">
        <h2>INGRESE LOS DATOS DEL NUEVO EMPLEADO</h2>
    </div>
    </div>

    <!-- Bootstrap Boilerplate... -->

    <div class="panel-body">
        <!-- Display Validation Errors -->
       
        <!-- New Task Form -->
        <form action="/empleado/save" method="POST" >
            {{ csrf_field() }}

            <!-- Task Name -->
            <div class="form-group">
                <label for="cui" class="col-sm-3 control-label">Número de DPI </label>
                <input type="text" name="cui"  class="form-control">
            </div>

            <div class="form-group">
                <label for="nombres" class="col-sm-3 control-label">Nombres </label>
                <input type="text" name="nombres"  class="form-control">
            </div>

            <div class="form-group">
                <label for="apellidos" class="col-sm-3 control-label">Apellidos </label>
                <input type="text" name="apellidos"  class="form-control">
            </div>

            <div class="form-group">
                <label for="email" class="col-sm-3 control-label">E-mail</label>
                <input type="text" name="email"  class="form-control">
            </div>

            <div class="form-group">
                <label for="direccion" class="col-sm-3 control-label">Dirección</label>
                <input type="text" name="direccion"  class="form-control">
            </div>

            <div class="form-group">
                <label for="telefono_casa" class="col-sm-3 control-label">Teléfono Domiciliar</label>
                <input type="text" name="telefono_casa"  class="form-control">
            </div>

            <div class="form-group">
                <label for="telefono_movil" class="col-sm-3 control-label">Teléfono Celular</label>
                <input type="text" name="telefono_movil"  class="form-control">
            </div>


            <!-- Add Task Button -->
            <div class="form-group">
                <div class="col-sm-offset-4 col-sm-8">
                    <button type="submit" class="btn btn-default">
                        <i class="fa fa-plus"></i> Agregar Empleado
                    </button>
                     <button type="submit" class="btn btn-default">
                        <a href="{{ url('/empleado') }}">Regresar</a>
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>

    <!-- TODO: Current Tasks -->
@endsection