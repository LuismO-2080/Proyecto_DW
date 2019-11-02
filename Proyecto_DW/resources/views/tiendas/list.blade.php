@extends('layouts.app')
@section('content')
<div class="col-sm-offset-1 col-sm-10">
    <div class="col-sm-offset-3 col-sm-12">
    <div class="panel-title">
        <h1>Listado de Tiendas Existentes</h1>
    </div>
    </div>
    <!-- Bootstrap Boilerplate... -->


    <div class="panel-body">
        <!-- Display Validation Errors -->

<table class="table table-striped">
  ...
                <tr>
                        <td>ID de Tienda</td>
                        <td>Nombre de Tienda</td>
                        <td>Nombre Comercial</td>
                        <td>NIT de Tienda</td>
                        <td>Encargado de Tienda</td>
                        <td>Ubicación de Tienda</td>
                        <td>Capacidad de Tienda</td>
                        <td>Fecha de Creación</td>
   
                </tr>
                    @foreach($tienda as $tienda)
                 <tr>
                    <td><a href="{{route('tienda.edit',$tienda->id)}}"> {{$tienda->id}}</a></td>
                    <td><a href="{{route('tienda.edit',$tienda->id)}}">  {{$tienda->tienda}}</a></td>
                    <td>  {{$tienda->nombre}}</td>                    
                    <td>  {{$tienda->nit}}</td>   
                    <td>  {{$tienda->encargado_id}}</td>
                    <td>  {{$tienda->ubicacion}}</td>
                    <td>  {{$tienda->capacidad}}</td>
                    <td>  {{$tienda->created_at}}</td>
                </tr>
                    @endforeach
            </table>
            <div class="links">
            
                    <br>
                    </br>
                    <button><a href="{{ '/tienda' }}">Regresar</a></button>
        </div>
    </div>
</div>



@endsection