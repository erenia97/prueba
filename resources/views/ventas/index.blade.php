@extends('layouts.app')


@section('content')
<div class="container">
     
    <div class="row">
        <div class="col-md-10 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"> VENTAS</div>
                <div class="panel-body">
                   
                      <table width="100%">
                        <tr>
                            <td>
                                no.
                            </td>
                            <td>
                                Usuarios
                            </td>
                            <td>
                              CLIENTES
                            </td>
                           
                            <td>
                               TOTAL
                            </td>
                            <td>
                               ESTADO
                            </td>
                            <td>
                              ACCIONES
                            </td>
                            
                            
                        </tr>
                         
                         @foreach($consulta as $ventas)
                           <tr>
                              <td>{{$loop->iteration}}</td>
                              <td>{{$ventas->usuario->name}}</td>
                              <td>{{$ventas->cliente->nombre}}</td>
                              <td>{{$ventas->total}}</td>
                              <td>
                                @if($ventas->status==0)

                                    ACTIVO
                                  @else

                                    ANULADO

                                  @endif

                              </td>
                               <td>

                                <a href="{{route('ventas.show', $ventas->id_ventas) }}">
                                  <button class="btn btn-info"  >Detalles</button>
                                  </a>
                                </td>
                                <td>

                                @if($ventas->status==0)

                                  <form class="form-horizontal" method="POST" action="{{route('ventas.update',$ventas->id_ventas)}}">
                                     {{ csrf_field() }}
                                      <input name="_method" type="hidden" value="PUT">

                                  <button class="btn btn-danger" type="submit"> ANULAR </button>
                                </form>

                                 @endif
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


                                   
