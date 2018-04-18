@if (session('info'))
	<br>           
	<div class="alert alert-info alert-dismissible">
		 <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
		 <strong>Información: </strong> {{ session('info') }}
	</div>
@endif

@if (session('success'))
	 <br>           
	<div class="alert alert-success alert-dismissible">
		<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
		<strong>Operación realizada con exito: </strong> {{ session('success')}}
	</div>
@endif

@if (session('warning'))
	<br>           
	<div class="alert alert-warning alert-dismissible">
		<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
		<strong>Advertencia: </strong> {{ session('warning') }}
	</div>
@endif

@if (session('danger'))
	<br>           
	<div class="alert alert-danger alert-dismissible">
		<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
		<strong>Error: </strong> {{ session('danger') }}
	</div>
@endif
