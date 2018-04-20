@extends('layouts.app')

@section('content')
<!--Container con un formulario para poder crear un ticket nuevo 
El usuario debera proporcionar un nombre para poder proceder -->

<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			@include('partials.alert')
			@include('partials.errors') 
			<a href="#" class="btn btn-default btn-lg btn-block">Nuevo Entrada</a>
		</div>
	</div>
	<br>
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading text-center">Inventario</div>
					<div class="panel-body">
						<div class="table-responsive">
							
							<table class="table table-striped table-bordered table-hover ">
								<tr>
									<th class="text-center">producto</th>
									<th class="text-center">ventas</th>
								</tr>
							{{$prueba}}
		
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