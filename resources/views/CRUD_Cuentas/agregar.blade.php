@extends('layouts.app')

@section('content')

{!! Form::open(['url' =>'/ventas' ]) !!}
	{!! Form::token() !!}
	{!! Form::hidden('counts_id',$id_cuenta) !!}
	{!! Form::hidden('status_count_products_id',1) !!}
		
	<div class="form-group">
		<div class="col-sm-10 col-sm-offset-1">
		<br>
			<div class="form-group text-right">
				{{ Form::submit('Enviar',['class'=>'btn btn-primary btn-block']) }}
			</div>
		</div>
	</div>
	
	<!--Separación-->
		<div class="form-group"><br><hr>
			@foreach ($categorias as $categoria)
				<div class="panel-group">
					<div class="panel panel-default col-sm-10 col-sm-offset-1 panel panel-default">
						<div class="panel-heading">
							<h4 class="panel-title">
								<a data-toggle="collapse" href="#{{$categoria->NombreCategoria}}" class="text-center"><h4>{{$categoria->NombreCategoria}}</h4></a>
							</h4>
						</div>
						<div id="{{$categoria->NombreCategoria}}" class="panel-collapse collapse in">
							<!--PARTE QUE ME INTERESA-->
							<div class="panel-body">
								<div class="row">
									@foreach ($categoria->Products as $producto )
										<div class="col-lg-4 col-md-6">
											{{ Form::selectRange('cantidad['.$producto->id.']', 0, 24)}}
											<label>
												
												{{ Form::checkbox('productos[]', $producto->id ) }}  {{ $producto->NombreProducto }}  		
											</label>
										</div>
										
									@endforeach		
								</div>	
							</div>
							<!--/PARTE QUE ME INTERESA-->
						</div>
					</div>
				</div>

			@endforeach
		</div>

{!! Form::close() !!}
@endsection
