@extends('layouts.app')

@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
		@include('partials.alert')
		@include('partials.errors')  
			<div class="panel panel-default">
				<div class="panel-heading text-center lead"><strong>Nuevo Producto</strong></div>
					<div class="panel-body">   
						@include('CRUD_Productos.form',['producto'=>$producto,'categorias'=>$categorias, 'url' => '/productos', 'method' => 'POST','before' => 'csrf'])
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection
