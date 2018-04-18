@extends('layouts.app')

@section('content')

	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<div class="panel panel-default">
					@include('partials.alert')
    				@include('partials.errors')
					<div class="panel-heading text-center lead">
						<strong>Crear nueva categoría</strong>
					</div>
					<div class="panel-body">						
						@include('CRUD_Categorias.form',['categoria'=>$categoria, 'url' => '/categorias', 'method' => 'POST','before' => 'csrf'])
					</div>
	            </div>
        	</div>
		</div>
	</div>
	


@endsection
