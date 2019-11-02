@extends('layouts.app')

@section('content')

<div class="col-sm-offset-3 col-sm-6">
    <div class="col-sm-offset-2 col-sm-8">
    <div class="panel-title">
        <h1>Detalle de Empleados</h1>
          <br>
    </br>

    </div>
     </div>
    <!-- Bootstrap Boilerplate... -->

     <!-- New Task Form -->
    <form action="/empleado/{{$empleado->id}}/update" method="POST" >
            {{ csrf_field() }}

            <input type="hidden" name="_method" value="patch">


            <div class="form-group"> 
                <label for="cui" class="col-sm-3 control-label">Numero de DPI</label>
                <input type="text" name="cui" value="{{$empleado->cui}}"  class="form-control">
            </div>


            <div class="form-group"> 
                <label for="Nombres" class="col-sm-3 control-label">Nombres</label>
                <input type="text" name="Nombres" value="{{$empleado->Nombres}}"  class="form-control">
            </div>


            <div class="form-group">
                <label for="Apellidos" class="col-sm-3 control-label">Apellidos</label>
                <input type="text" name="Apellidos" value="{{$empleado->Apellidos}}" class="form-control">
            </div>

            <div class="form-group">
                <label for="email" class="col-sm-3 control-label">E-mail</label>
                <input type="text" name="email" value="{{$empleado->email}}" class="form-control">
            </div>

            <div class="form-group">
                <label for="direccion" class="col-sm-3 control-label">Dirección</label>
                <input type="text" name="direccion" value="{{$empleado->direccion}}" class="form-control">
            </div>

            <div class="form-group">
                <label for="telefono_casa" class="col-sm-3 control-label">Teléfono Domiciliar</label>
                <input type="text" name="telefono_casa" value="{{$empleado->telefono_casa}}" class="form-control">
            </div>

            <div class="form-group">
                <label for="telefono_movil" class="col-sm-3 control-label">Teléfono Celular</label>
                <input type="text" name="telefono_movil" value="{{$empleado->telefono_movil}}" class="form-control">
            </div>






            <!-- Add Task Button -->
                        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-8">
                <button type="submit" class="btn btn-default">
                <i class="fa fa-plus"></i> Actualizar Registro
            </button>

                <form  action="/empleado/remove/{{$empleado->id}}" method="POST" >
            {{ csrf_field() }}
            <button type="submit" class="btn btn-default">
             <input type="hidden" name="_method" value="delete">
             <input type="submit" value="Eliminar Registro">
            </button>
                </form>

            <button type="submit" class="btn btn-default">
                <form>
                 <a href="{{ '/empleado' }}"> Regresar</a>
                </form> 
            </button>

                </div>
            </div>
      </form>
   
    </div>



@endsection 