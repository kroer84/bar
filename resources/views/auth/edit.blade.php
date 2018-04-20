@extends('layouts.app')

@section('head')
    <link rel="stylesheet" href="{{ asset('css/misestilos.css') }}">
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            @include('partials.errors')
            <!--Panel de instrucciones-->
            <div class="panel panel-default">
                <div class="panel-heading text-center">Instrucciones</div>
                <div class="panel-body">
                    <p>
                        Para editar un usuario debe tener en cuenta lo siguiente:<br>
                        <ul>
                            <li>El nombre de usuario no puede repetirse</li>
                            <li>La contraseña debe tener al minimo 6 caracteres</li>
                            <li>El correo no puede repetirse</li>
                        </ul>
                        <b>Atención:</b> Por protección a las contraseñas debe definir una nueva.
                    </p>
                </div>                                 
            </div>

            <div class="panel panel-default">
                <div class="panel-heading">Edición de usuario: {{ $user->name }}</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('usuarios.update') }}">
                        {{ csrf_field() }}
                        {!! method_field('PUT') !!}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label" >Nombre</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ $user->name }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">
                            <label for="username" class="col-md-4 control-label">Nombre de usuario</label>

                            <div class="col-md-6">
                                <input id="username" type="text" class="form-control" name="username" value="{{ $user->username }}" required>

                                @if ($errors->has('username'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('username') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">Email</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ $user->email }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('rol') ? ' has-error' : '' }}">
                            <label for="rol" class="col-md-4 control-label">Permisos</label>

                            <div class="col-md-6">
                                <select name="rol" class="form-control" value="{{ old('rol') }}" id="rol" required>
                                  <option value="mesero" selected >mesero</option> 
                                  <option value="gerente">Gerente</option>
                                  <option value="admin" >Administrador</option>

                                </select>
                                

                                @if ($errors->has('rol'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('rol') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirmar Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <input type="hidden" name="id" value="{{ $user->id }}">
                        <input type="hidden" name="currentUserName" value="{{ $user->username }}">

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Actualizar usuario
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

@section('javascript')

@endsection
