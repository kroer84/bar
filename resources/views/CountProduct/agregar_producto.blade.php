@extends('layouts.app') @section('content')

<div class="container">
	
	<div class="row">
		<div class="panel panel-default">
			<div class="panel-heading">
				<div class="row">
					<div class="col-sm-4">
						<label class="control-label">Nombre del Cliente: </label>
						<spam class="text-left">juan Perez</spam>
					</div>
					<div class="col-sm-4 col-sm-offset-4">
						<div class="form-group">
							Nombre Categoria: {{$catego->NombreCategoria}}
							{{$catego->id}}
						</div>
					</div>
				</div>
			</div>
			<div class="panel-body">
				<div class="table-responsive">
					<table class="table table-bordered text-center">
						<thead>
							<tr class="active text-center">
								<th class="text-center hidden-xs">Nombre del producto</th>
								<th class="text-center hidden-sm hidden-md hidden-lg">Producto</th>
								<th class="text-center">Cantidad</th>
								<th class="text-center hidden-xs">Acciones de producto</th>
								<th class="text-center hidden-sm hidden-md hidden-lg">Acciones </th>
							</tr>
						</thead>
						<form method="POST">
    
						@foreach($products as $product)
						<tbody>
							<tr>
								<td>{{ $product->NombreProducto}} {{$product->id}}</td>
								
								<td>
									<div class="form-group">
										<div class="col-sm-4 col-sm-offset-4 col-xs-10 col-xs-offset-1">
											<input id="num" type="number" class="text-center form-control" min="0" value="0">
										</div>
									</div>
								</td>
								<td>
								
									<button type="button" class="btn btn-primary">Agregar</button>
								</td>
							</tr>
							@endforeach
</form>
						</tbody>
					</table>
				</div>
			</div>
			<div class="panel-footer">
				<div class="row">
					<div class="col-xs-4 col-xs-offset-1">
						<a class="btn btn-primary btn-block" href="{{ route('agregar_producto',1) }}" role="button"> Cancelar</a>
					</div>
					<div class="col-xs-4 col-xs-offset-2">
						<a class="btn btn-primary btn-block" href="{{ route('generar_ticket',1) }}" role="button"> Terminar</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection