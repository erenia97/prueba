@extends('layouts.app')



@section('content')
<div class="container">
     
    <div class="row">
        <div class="col-md-10 col-md-offset-0">
            <div class="panel panel-default">
                <div class="panel-heading">PRODUCTOS</div>
                <div  class="panel-heading">

                 <a href="{{ route('productos.create') }}">Ingrese Producto</a>
                       </div>          
                                
                           
                  
                <div class="panel-body">
                   
                      <table width="85%">
                        <tr>
                            <td>
                                no.
                            </td>
                            <td>
                                nombre
                            </td>
                            <td>
                                codigo
                            </td>
                            <td>
                                sku
                            </td>
                            <td>
                                Precio
                            </td>
                            <td>
                                acciones
                          </td>

                        </tr>
                         @foreach($consulta as $producto)
                           <tr>
                              <td>{{$loop->iteration}}</td>
                              <td>{{$producto->nombre}}</td>
                              <td>{{$producto->codigo}}</td>
                              <td>{{$producto->sku}}</td>
                              <td>{{$producto->precio}}</td>

                              <td>
                                
                                  <a href="{{route('productos.edit', $producto->id_productos) }}"  >
                                  <button class="btn btn-info"  > EDITAR </button>
                                  </a>
                                  </td>
                                  <td>
                                   
                                  <a href="{{route('productos.show', $producto->id_productos)}}">
                                   
                                      <button class="btn btn-danger"  >     ELIMINAR</button> 
                                    </a>        
                                       
                                        
                               </td>                                 
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