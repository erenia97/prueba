@extends('layouts.app')



@section('content')
<div class="container">
     
    <div class="row">
        <div class="col-md-12 col-md-offset-0">
            <div class="panel panel-default">
                <div class="panel-heading">CLIENTES</div>
                <div  class="panel-heading">

                 <a href="{{ route('clientes.create') }}">Ingrese Cliente</a>
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
                                fecha de nacimiento
                            </td>
                             <td>
                                sexo 
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
                         @foreach($consulta as $cliente)
                           <tr>
                              <td>{{$loop->iteration}}</td>
                              <td>{{$cliente->nombre}}</td>
                              <td>{{$cliente->direccion}}</td>
                              <td>{{$cliente->fecha_nacimiento}}</td>
                              <td>
                              @if($cliente->sexo == 1)
                                 Mujer
                              @else
                                 hombre
                              @endif
                              </td>                         
                              <td> {{$cliente->nit}}</td> 
                               
                              <td>{{$cliente->telefono}}</td> 

                              <td>
                                <!--<a href="{{url('clientes.edit', $cliente->id_clientes) }}" ><button class="btn btn-info">EDITAR</button></a>-->
                                
                                  <a href="{{route('clientes.edit', $cliente->id_clientes) }}"  >
                                  <button class="btn btn-info"  > EDITAR </button>
                                  </a>
                                    
                                   </td>
                                   <td>
                                  <a href="{{route('clientes.show', $cliente->id_clientes)}}">
                                   
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