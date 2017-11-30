@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">ELIMINAR PRODUCTO</div>

'                   <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('productos.destroy',$producto->id_productos) }}">
                         {{ csrf_field() }}
                          {{ method_field('DELETE') }}
                       
                        <input name="method" type="hidden" value="DELETE">

                         <!--se agrego para validar el metodo put 
                         <input name="_method" type="hidden" value="PUT">-->
                        <div class="form-group{{ $errors->has('nombre') ? ' has-error' : '' }}">
                            <label for="nombre" class="col-md-4 control-label">nombre</label>

                            <div class="col-md-6">
                                <input id="nombre" type="text" class="form-control" name="nombre" value="{{ $producto->nombre }}" required autofocus>

                                @if ($errors->has('nombre'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('nombre') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('codigo') ? ' has-error' : '' }}">
                            <label for="codigo" class="col-md-4 control-label">codigo</label>

                            <div class="col-md-6">
                                <input id="codigo" type="number" class="form-control" name="direccion" value="{{ $producto->codigo }}" required>
                               
                                @if ($errors->has('codigo'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('codigo') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('sku') ? ' has-error' : '' }}">
                            <label for="sku" class="col-md-4 control-label">Sku</label>

                            <div class="col-md-6">
                                <input id="sku" type="number" class="form-control" name="sku" value="{{ $producto->sku }}" required>

                                @if ($errors->has('sku'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('sku') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                         <div class="form-group{{ $errors->has('precio') ? ' has-error' : '' }}">
                            <label for="precio" class="col-md-4 control-label">Precio</label>

                            <div class="col-md-6">
                                <input id="precio" type="number" class="form-control" name="precio" value="{{ old('precio') }}" required>

                                @if ($errors->has('precio'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('precio') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
 
                       
                        
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button class="btn btn-danger" type="submit" value="delete">
                                   ELIMINAR
                                </button>

                            </div>
                            
                       
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection