@extends('layouts.app')

@section('content')
<!--Container con un formulario para poder crear un ticket nuevo 
El usuario debera proporcionar un nombre para poder proceder -->

<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			@include('partials.alert')
			@include('partials.errors') 
		</div>
	</div>
	<br>
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading text-center">Ventas</div>
					<div class="panel-body">
						<div class="table-responsive">

							<table class="table table-striped table-bordered table-hover ">
								<tr>
									<th class="text-center">producto</th>
									<th class="text-center">Cantidad</th>
									<th class="text-center">precio</th>
									<th class="text-center">subtotal</th>

								</tr>
								<?php $sum = 0; ?>
									@foreach ($ventas as $venta )
								<tr>
									<td>
										{{$venta->product->NombreProducto}}
									</td>
									<td>
										{{$venta->cantidad}}
									</td>
									<td>
										{{$venta->product->precio}}
									</td>
									<td>
										{{$subtotal = $venta->cantidad * $venta->product->precio }}
									</td>
										<?php $sum += $subtotal; ?>
									</tr>
									@endforeach
									<td></td>
									<td></td>
									<td>Total</td>
									<td>{{$sum}}	</td>
							</table>

						</div>
					</div>                
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
<!--
		<div class="floating">
			<a href="#" class="btn btn-primary btn-fab">
				<i class="material-icons">add</i>
			</a>
		</div>
		-->