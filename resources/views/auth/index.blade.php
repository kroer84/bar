@extends('layouts.app')

@section('head')
	<link rel="stylesheet" href="{{ asset('css/misestilos.css') }}">
@endsection


@section('content')
	<div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
            	<!--Panel de instrucciones-->
				<div class="panel panel-default">
                	<div class="panel-heading text-center">Instrucciones</div>
                	<div class="panel-body">
                		<p>
                			Desde este panel usted puede gestionar los usuarios dentro de su sistema. Puede crear mas cuentas para nuevos usuarios, eliminar las cuentas o editar las cuentas.<br>
                			<b>Atención:</b> Una vez eliminado los usuarios no podrán volver a acceder al sistema
                		</p>
                	</div>                                 
              	</div>
              	@include('partials.alert')
        		@include('partials.errors')

              	<!--Boton de crear nuevo usuario-->
              	<a type="button" class="btn btn-default margen-inferior2" href="{{ route('usuarios.create') }}">Crear un nuevo usuario
              	</a>

            	<!--Panel de usuarios-->
            	<div class="panel panel-default">
                	<div class="panel-heading text-center">Panel De Usuarios</div>
                	<div class="panel-body">
                            
                    	<div class="table-responsive">                          
	                    	<table class="table table-striped table-bordered table-hover ">
	                    		<tr>
	                          		<th class="text-center">Nombre</th>
	                          		<th class="text-center">Usuario</th>
	                          		<th class="text-center">Email</th>
	                          		<th class="text-center">Rol de usuario</th>
	                          		<th class="text-center">Acciones</th>
	                        	</tr>
		                        @foreach($users as $user)            
			                        <tr>
			                          <td> {{ $user->name }} </td>
			                          <td> {{ $user->username }}</td>
			                          <td> {{ $user->email }}</td>
			                          <td>
			                          	@switch($user->rol)
			                                @case('admin')
			                                    Administrador
			                                    @break
			                                @case('gerente')
			                                    Gerente
			                                    @break
			                                @case('mesero')
			                                    Mesero
			                                    @break
			                                @default
			                                    Error
			                            @endswitch
			                          </td>
			                          <td>
			                            <div class="col-lg-6 col-md-6 col-sm-6 ">
			                            	<a class="btn btn-default btn-block btn-sm" href="{{ route('usuarios.edit',$user->id) }}" role="button">Editar</a>
			                            </div>
			                            <div class="col-lg-6 col-md-6 col-sm-6 margen-superior2 visible-xs">
			                            	<form class="form-horizontal" method="POST" action="{{ route('usuarios.delete') }}">
						                        {{ csrf_field() }}
						                        {!! method_field('DELETE') !!}
									                <button type="submit" class="btn btn-default btn-block btn-sm">
						                                Eliminar
						                            </button>
						                            <input type="hidden" name="id" value="{{ $user->id }}">
						                    </form>
			                            </div>
			                            <div class="col-lg-6 col-md-6 col-sm-6 hidden-xs">
			                            	<form class="form-horizontal" method="POST" action="{{ route('usuarios.delete') }}">
						                        {{ csrf_field() }}
						                        {!! method_field('DELETE') !!}
									                <button type="submit" class="btn btn-default btn-block btn-sm">
						                                Eliminar
						                            </button>
						                            <input type="hidden" name="id" value="{{ $user->id }}">
						                    </form>
			                            </div>
			                          </td>
			                        </tr>
		                        @endforeach
	                      </table>
                    	</div>
                	</div>                                 
              	</div>
            </div>
        </div>
    </div>
@endsection

@section('javascript')

@endsection