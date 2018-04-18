{!! Form::open(['url'=> '/productos/'.$producto->id, 'method'=> 'DELETE','class'=>'form-group ','before' => 'csrf']) !!}
<div>
		<input type="submit" value="Eliminar" class="btn btn-default btn-block btn-lg">
</div>
{!! Form::close() !!}