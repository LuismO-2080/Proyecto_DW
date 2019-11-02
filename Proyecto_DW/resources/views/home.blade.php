@extends('layouts.app')


<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Ferretería La Carreta</title>

        
}

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 150;
                height: 150vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: relative;
                display: center;
                justify-content: relative;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 25px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 60px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 500;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-15">
            <div class="card">
                <div class="card-header"></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                <div class="content">
                <div class="title m-b-md">
                    Ferretería  La  Carreta
                </div>

                    <div class="btn-group" role="group" aria-label="Basic example">

                    <a type="button" class="btn btn-secondary" href="{{'/proveedor'}}">PROVEEDORES</a>
                    <a type="button" class="btn btn-secondary" href="{{'/producto'}}">PRODUCTOS</a>
                    <a type="button" class="btn btn-secondary" href="{{'/tienda'}}">TIENDAS</a>
                    <a type="button" class="btn btn-secondary" href="{{'/empleado'}}">EMPLEADOS</a>
                    <a type="button" class="btn btn-secondary" href="{{'/serie'}}">FACTURACION</a>
               
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
