{!! Form::open(['url' => $url,'method' => $method, 'files'=>true ]) !!}
<div class="row">
	<div class="form-group">
		<div class="col-xs-12 col-sm-2 col-md-2">
			{{Form::label('name', 'Nueva Cuenta')}}
		</div>
		<div class="col-xs-12 col-sm-10 col-md-10">
			{{ Form::text('NombreCliente', $cuenta->NombreCliente,['class'=>'form-control','placeholder'=>'Nombre...'])}}
		</div>
	</div>
</div>
<br>
<div class="form-group text-right">
	<input type="submit" value="Crear nueva cuenta" class="btn btn-success btn-block">
</div>

	
	 

	
{!! Form::close() !!}
