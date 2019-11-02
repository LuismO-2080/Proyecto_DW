@extends('layouts.app')
@section('content')
<div class="col-sm-offset-1 col-sm-10">
    <div class="col-sm-offset-3 col-sm-12">
    <div class="panel-title">
        <h2>LISTADO DE EMPLEADOS</h2>
    </div>
    </div>

    <!-- Bootstrap Boilerplate... -->

    <div class="panel-body">
    <table class="table table-striped">

                <tr>
                        <td>ID</td>
                        <td>DPI</td>
                        <td>Nombres</td>
                        <td>Apellidos</td>
                        <td>E-mail</td>
                        <td>Domicilio</td>
                        <td>Teléfono Domiciliar</td>
                        <td>Teléfono Celular</td>
                        <td>Fechar de Ingreso</td>
  
                </tr>
                    @foreach($empleado as $empleado)
                    <div class="col-sm-offset-1 col-sm-10">
                 <tr>
                    <td><a href="{{route('empleados.edit',$empleado->id)}}">  {{$empleado->id}}</a></td>
                    <td><a href="{{route('empleados.edit',$empleado->id)}}">  {{$empleado->cui}}</a></td>
                    <td>  {{$empleado->Nombres}}</td>
                    <td>  {{$empleado->Apellidos}}</td>
                    <td>  {{$empleado->email}}</td>          
                    <td>  {{$empleado->direccion}}</td>   
                    <td>  {{$empleado->telefono_casa}}</td>
                    <td>  {{$empleado->telefono_movil}}</td>
                    <td>  {{$empleado->created_at}}</td>
                 </tr>
                 </div>
                    @endforeach
            </table>
            
        </div>
        <br>
        </br>
                    <button type="submit" class="btn btn-default">
                        <a href="{{ '/empleado/list' }}">Regresar</a>
                    </button>
        </div>
    </div>
</div>
@endsection