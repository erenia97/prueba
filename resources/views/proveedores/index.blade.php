@extends('layouts.app')



@section('content')
<div class="container">
     
    <div class="row">
        <div class="col-md-10 col-md-offset-0">
            <div class="panel panel-default">
                <div class="panel-heading">PROVEEDORES</div>
                <div  class="panel-heading">

                 <a href="{{ route('proveedores.create') }}">Ingrese Proveedor</a>
                       </div>          
                                
                <div class="panel-body">
                   
                      <table width="100%">
                        <tr>
                            <td>
                                no.
                            </td>
                            <td>
                                nombre
                            </td>
                            <td>
                                direccion
                            </td>
                            <td>
                                
                                      nit

                            </td>
                            
                             <td>
                                telefono
                            </td>
                            <td>
                                acciones
                          </td>
                        </tr>
                         @foreach($consulta as $proveedores)
                           <tr>
                               <td>{{$loop->iteration}}</td>
                               <td>{{$proveedores->nombre}}</td>
                               <td>{{$proveedores->direccion}}</td>
                               <td> {{$proveedores->nit}}</td>                     
                               <td>{{$proveedores->telefono}}</td>                                   
                         

                             <td>
                                
                                  <a href="{{route('proveedores.edit', $proveedores->id_proveedores) }}"  >
                                  <button class="btn btn-info"  > EDITAR </button>
                                  </a>
                                </td>

                                <td>
                                   
                                  <a href="{{route('proveedores.show', $proveedores->id_proveedores)}}">
                                   
                                      <button class="btn btn-danger"  > ELIMINAR</button> 
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