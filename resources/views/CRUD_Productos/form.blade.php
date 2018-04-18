{!! Form::open(['url' => $url,'method' => $method, 'files'=>true ]) !!}
<div class="row">
	<div class="form-group">
		<div class="col-xs-12 col-sm-2 col-md-2">
			{{Form::label('category', 'Categoria')}}
		</div>
		<div class="col-xs-12 col-sm-10 col-md-10">
			{{ Form::select('categories_id',$categorias, $producto->categories_id, ['placeholder' => 'Seleccione una categoria','class'=>'form-control']) }}
		</div>
	</div>
</div>
<br>
<div class="row">
	<div class="form-group">
		<div class="col-xs-12 col-sm-2 col-md-2">
			{{Form::label('name', 'Nombre')}}
		</div>
		<div class="col-xs-12 col-sm-10 col-md-10">
			{{ Form::text('NombreProducto', $producto->NombreProducto,['class'=>'form-control','placeholder'=>'Nombre...'])}}
		</div>
	</div>
</div>
<br>
<div class="row">
	<div class="form-group">
		<div class="col-xs-12 col-sm-2 col-md-2">
			{{Form::label('precing', 'Precio')}}
		</div>
		<div class="col-xs-12 col-sm-10 col-md-10">
			{{ Form::number('precio',$producto->precio,['class'=>'form-control','placeholder'=>'precio...','step' => '0.01'])}}
		</div>
	</div>
</div>
<br>
<div class="row">
	<div class="form-group">
		<div class="col-xs-12 col-sm-2 col-md-2">
			{{Form::label('img', 'Imagen')}}
		</div>
		<div class="col-xs-12 col-sm-10 col-md-10">
			{{ Form::file('imagen',['class'=>'form-control'])}}
		</div>
	</div>
</div>
<br>
	<div class="form-group text-right">
		<a href="{{ url('/productos') }}" class="btn btn-primary">Cancelar</a>
		<input type="submit" value="Enviar" class="btn btn-success">
	</div>

	
	 

	
{!! Form::close() !!}
