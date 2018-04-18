@extends('layouts.app')

@section('content')

	<div class="container">
		<div class="row">
			<a href="{{ route('categorias.create') }}" class="btn btn-default btn-lg btn-block">Nueva Categoria</a>
		</div>
	</div>

	<hr>

		@foreach ($categorias as $categoria)
		
			<div class="col-xs-12 col-sm-6 col-md-6">
				<div class="panel panel-default">
					<div class="panel-heading text-center"> <h4>{{ $categoria->NombreCategoria }}</h4> </div>
						<div class="panel-body">
							<div class="col-xs-6 col-sm-6 col-md-6">
								@if ($categoria->imagen)
									<img class='img-thumbnail img-responsive center-block' width="120" height="120" src="{{$categoria->imagen}}">		
								@else
									<img class='img-thumbnail img-responsive center-block' width="120" height="120" src="img/sinimagen.jpg">
								@endif	
							</div>
							<div class="col-xs-6 col-sm-6 col-md-6">
								
								<a href="{{url('/categorias/'.$categoria->id.'/edit')}}" class="btn btn-default btn-lg btn-block"  role="button"><span class="glyphicon glyphicon-pencil"></span>  Editar</a>
								<br>
								@include('CRUD_Categorias.delete',['categoria'=> $categoria])
							</div>
						</div>
					</div>
				</div>
			</div>
		@endforeach
		{{ $categorias->render()}}
	

</div>

@endsection
