{!! Form::open(['url' => $url,'method' => $method, 'files'=>true ]) !!}
		
		<div class="row">
			<div class="form-group" align="center">
				<div class="col-sm-3 col-xs-12 col-lg-offset-1 col-md-5"><br>
					{{Form::label('Nombre', 'Nombre de la Categoria')}}
				</div>
				<div class="col-sm-8 col-xs-12 col-lg-4 col-md-5" ><br>
					{{ Form::text('NombreCategoria', $categoria->NombreCategoria,['class'=>'form-control','placeholder'=>'Nombre del arreglo...'])}}
				</div>
			</div>
		</div>

		<div class="row">
			<div class="form-group" align="center">
				<div class="col-sm-3 col-xs-12 col-lg-offset-1 col-md-5"><br>
					{{Form::label('img', 'Imagen')}}
				</div>
				<div class="col-sm-8 col-xs-12 col-lg-4 col-md-5"><br>
					{{ Form::file('imagen',['class'=>'form-control margen-inferior2','aling'=>'center'])}}
				</div><br><br>
			</div>
		</div>
        <br>       
    
	<div class="form-group">
		<div class="col-sm-10 col-sm-offset-1">
		<br>
			<div class="form-group text-right">
				{{ Form::submit('Enviar',['class'=>'btn btn-primary btn-block']) }}
			</div>
		</div>
	</div>
	
	

{!! Form::close() !!}