@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading text-center lead"><strong>Crear Producto</strong></div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">
                            <label for="productoname" class="col-md-4 control-label">Nombre </label>

                            <div class="col-md-6">
                                <input id="productoname" type="text" class="form-control" name="productoname" value="{{ old('username') }}" required autofocus>

                                @if ($errors->has('username'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('username') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="precio" class="col-md-4 control-label">Precio </label>

                            <div class="col-md-6">
                                <input id="precio" type="number" class="form-control" name="precio" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                           <label for="categoria" class="col-md-4 control-label">Categoria </label>
                            <div class="col-md-6">                                
                                <select name="select" class="form-control"> 
                                  <option value="1" >Categoria 1</option> 
                                  <option value="2" >Categoria 2</option>
                                  <option value="3" >Categoria 3</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Registrar nuevo producto
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
