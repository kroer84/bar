@extends('layouts.app')

@section('content')
<!--Container con un formulario para poder crear un ticket nuevo 
El usuario debera proporcionar un nombre para poder proceder -->

<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<a href="{{ route('productos.create') }}" class="btn btn-default btn-lg btn-block">Nuevo producto</a>
		</div>
	</div>
	<br>
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading text-center">Panel De Productos</div>
					<div class="panel-body">
						<div class="table-responsive">
							
							<table class="table table-striped table-bordered table-hover ">
								<tr>
									<th class="text-center">imagen</th>
									<th class="text-center">Nombre</th>
									<th class="text-center">Categoria</th>
									<th class="text-center">Precio</th>
									<th class="text-center">Acciones</th>
								</tr>
								@foreach($productos as $producto)
									<tr>
										<td>
											@if ($producto->imagen)
												<img class='img-thumbnail img-responsive center-block' width="120" height="120" src="{{$producto->imagen}}">		
											@else
												<img class='img-thumbnail img-responsive center-block' width="120" height="120" src="img/sinimagen.jpg">
											@endif
										</td>
										<td>{{$producto->NombreProducto}}</td>
										<td>{{$producto->category->NombreCategoria}}</td>
										<td>$ {{$producto->precio}}</td>
										<td>
											<div class="col-lg-6 col-md-6 col-sm-6 margen-inferior0">
												<a href="{{url('/productos/'.$producto->id.'/edit')}}" class="btn btn-default btn-lg btn-block"  role="button"><span class="glyphicon glyphicon-pencil"></span>  Editar</a>
											</div>
											
											<div class="col-lg-6 col-md-6 col-sm-6">
												@include('CRUD_Productos.delete',['producto'=> $producto])
											</div>
										</td>
									</tr>
								@endforeach
							</table>
							{{ $productos->render()}}
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