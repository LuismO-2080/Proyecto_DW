@extends('layouts.app')
@section('content')
<div class="col-sm-offset-1 col-sm-10">
    <div class="col-sm-offset-3 col-sm-12">
    <div class="panel-title">
        <h2>LISTADO DE PRODUCTOS</h2>
    </div>
    </div>

    <!-- Bootstrap Boilerplate... -->

    <div class="panel-body">

     <table class="table table-striped">

                <tr>
                        <td>ID</td>
                        <td>Código</td>
                        <td>Nombre del Producto</td>
                        <td>Nombre del Proveedor</td>
                        <td>Ubicación del Producto</td>
                        <td>Precio Costo</td>
                        <td>Precio Venta</td>
                        <td>Fecha Ingreso de Producto</td>
  
                </tr>
                    @foreach($producto as $producto)
                    <div class="col-sm-offset-1 col-sm-10">
                 <tr>
                    <td><a href="{{route('productos.edit',$producto->id)}}">  {{$producto->id}}</a></td>
                    <td><a href="{{route('productos.edit',$producto->id)}}">  {{$producto->codigo}}</a></td>
                    <td>  {{$producto->nombre}}</td>
                    <td>  {{$producto->proveedor_id}}</td>          
                    <td>  {{$producto->ubicacion}}</td>   
                    <td>  {{$producto->costo}}</td>
                    <td>  {{$producto->precio_venta}}</td>
                    <td>  {{$producto->created_at}}</td>
                 </tr>
                 </div>
                    @endforeach
            </table>
            
        </div>
        <br>
        </br>
             <button><a href="{{ '/producto' }}">Regresar</a></button>
        </div>
    </div>
</div>
@endsection