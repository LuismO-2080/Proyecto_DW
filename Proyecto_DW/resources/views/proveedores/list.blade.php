@extends('layouts.app')
@section('content')
<div class="col-sm-offset-1 col-sm-10">
    <div class="col-sm-offset-3 col-sm-12">
    <div class="panel-title">
        <h2>Listado de Proveedores Existentes</h2>
    </div>
    </div>

    <!-- Bootstrap Boilerplate... -->

    <div class="panel-body">
<table class="table table-striped">

                <tr>
                        <td>ID</td>
                        <td>NIT del Proveedor</td>
                        <td>Nombre del Proveedor</td>
                        <td>Teléfono</td>
                        <td>Dirección</td>
                        <td>Fecha de Creación</td>
                
                </tr>
                    @foreach($proveedor as $proveedor)
                <tr>
                    <td><a href="{{route('proveedores.edit',$proveedor->id)}}"> {{$proveedor->id}}</a></td>
                    <td><a href="{{route('proveedores.edit',$proveedor->id)}}"> {{$proveedor->nit}}</a></td>
                    <td>  {{$proveedor->nombres}}</td>          
                    <td>  {{$proveedor->telefono}}</td>   
                    <td>  {{$proveedor->direccion}}</td>
                    <td>  {{$proveedor->created_at}}</td>
                </tr>
                 </div>
                    @endforeach
            </table>
            <div class="links">
            
        <br>
        </br>
             <button><a href="{{ '/proveedor' }}">Regresar</a></button>
        </div>
    </div>
</div>
@endsection