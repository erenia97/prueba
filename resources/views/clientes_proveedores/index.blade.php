@extends('layouts.app')


@section('content')
<div class="container">
     
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">CLIENTES Y PROVEEDORES</div>
                <div class="panel-body">
                   
                      <table>
                        <tr>
                            <td>
                                no.
                            </td>
                            <td>
                                Cliente
                            </td>
                            <td>
                               Proveedor
                            </td>
                            
                            
                        </tr>
                         @foreach($consulta as $v_detalle)
                           <tr>
                              <td>{{$loop->iteration}}</td>
                              <td>{{$v_detalle->cliente->nombre}}</td>
                              <td>{{$v_detalle->proveedor->nombre}}</td>
                              
                                                                
                         </tr>
                       

                          @endforeach

                       </table>

                    

                   

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection