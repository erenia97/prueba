@extends('layouts.app')



@section('content')
<div class="container">
     
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>
                 <a href="{{ url('/clientes') }}">Clientes</a>
                 <br>
                 <a href="{{ url('/proveedores') }}">Proveedores</a>
                  <br>
                 <a href="{{ url('/productos') }}">Productos</a>
                  <br>
                 <a href="{{ url('/ventas') }}">Ventas</a>
                  <br>
                  <a href="{{ url('/ventas_detalle') }}">Detalle de ventas</a>
                  <br>
                  <a href="{{ url('/clientes_proveedor') }}">Clientes y Proveedores</a>
                  <br>
                  <br>
                  <a href="{{ url('/ventas/factura') }}">Facturacion</a>
                  <br>


                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                   

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
