@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">DETALLES</div>

                  <div class="panel-body">
                    <form class="form-horizontal"  action="{{route('ventas.index')}}" >
                         {{ csrf_field() }}

                       <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Usuario</label>

                            <div class="col-md-6">
                                <input id="name" type="text" readonly="readonly" class="form-control" name="name" value="{{ $ventas->usuario->name }}" required autofocus>
                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('nombre') ? ' has-error' : '' }}">
                            <label for="nombre" class="col-md-4 control-label">Cliente</label>

                            <div class="col-md-6">
                                <input id="nombre" type="text" readonly="readonly" class="form-control" name="nombre" value="{{$ventas->cliente->nombre}}" required>
                               
                                @if ($errors->has('nombre'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('nombre') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('nit') ? ' has-error' : '' }}">
                            <label for="nit" class="col-md-4 control-label">nit</label>

                            <div class="col-md-6">
                                <input id="nit" type="number" readonly="readonly" class="form-control" name="nit" value="{{ $ventas->cliente->nit }}" required>

                                @if ($errors->has('nit'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('nit') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                       
                 
                        </div>

                      
                       
                        

                    <div class="panel-body">
                      <table width="100%">
                        <tr>
                           
                            <td>
                                Productos
                            </td>
                            <td>    </td>
                            <td>   </td>
                            <td>
                              Cantidad
                            </td>
                           <td>    </td>
                           <td>   </td>
                            <td>
                               SubTotal
                            </td>
                            <td>   </td>
                            <td>  </td>
                             <td>
                               Total
                            </td>
                            
                        </tr>
                         
                         @for($x=0; $x < count($ventas->detalle); $x++)
                            <tr>
                            
                              <td>{{$ventas->detalle[$x]->productos->nombre}}</td>
                              <td>  </td>
                              <td> </td>
                              <td>{{$ventas->detalle[$x]->cantidad}}</td>
                              <td>  </td>
                              <td>  </td>
                              <td>{{$ventas->detalle[$x]->subtotal}}</td>
                              <td>  </td>
                              <td> </td>
                                 <td>{{$ventas->total}}</td>
                           </tr>   
                          @endfor
                           

                       </table>

                   </div>
               </form>

                          <div>
 
                                  <a href="{{route('ventas.index') }}">
                                  <button class="btn btn-danger"  >Regresar</button>
                                  </a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
