@extends('layouts.app')

@section('content')

<div class="container">
	<div class="row">
	@include('partials.alert')
		@include('partials.errors') 
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading text-center lead"><strong>Editar Categoría</strong></div>
					<div class="panel-body">
						@include('CRUD_Productos.form',[
							'producto'=>$producto, 
							'categorias'=>$categorias,
							'url' => '/productos/'.$producto->id, 
							'method' => 'PUT',
							'before' => 'csrf'
						])		
				</div>
			</div>
		</div>
	</div>
</div>
	


@endsection