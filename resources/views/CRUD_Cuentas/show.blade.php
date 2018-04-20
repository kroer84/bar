@extends('layouts.app')

@section('content')

<!--Container con un formulario para poder crear un ticket nuevo 
El usuario debera proporcionar un nombre para poder proceder -->
<div class="container">
    <div class="row">
		@switch($cuenta->status_counts_id)
                                @case(1)
                                    <div class="panel panel-success">
                                    <div class="panel-heading">
                                <span class="label label-success" style="float: right">{{ $cuenta->StateCount->NombreEstado }}</span>
                                    <h3 align="left"> Cliente: {{ $cuenta->NombreCliente}} <h3>
                                </div>
                                    @break

                                @case(2)
                                    <div class="panel panel-primary">
                                    <div class="panel-heading">
                                <span class="label label-primary" style="float: right">{{ $cuenta->StateCount->NombreEstado }}</span>
                                    <h3 align="left"> Cliente: {{ $cuenta->NombreCliente}} <h3>
                                </div>
                                    @break
                                
                                @case(3)
                                    <div class="panel panel-danger">
                                    <div class="panel-heading">
                                <span class="label label-danger" style="float: right">{{ $cuenta->StateCount->NombreEstado }}</span>
                                    <h3 align="left"> Cliente: {{ $cuenta->NombreCliente}} <h3>
                                </div>
                                    @break

                                @default
                                    <div class="panel panel-default">
                                    <div class="panel-heading">
                                <span class="label label-default" style="float: right">{{ $cuenta->StateCount->NombreEstado }}</span>
                                    <h3 align="left"> Cliente: {{ $cuenta->NombreCliente}} <h3>
                                </div>
                            @endswitch
			<div class="panel-body">
				<span class="label label-default" style="float: right">{{ Carbon\Carbon::parse($cuenta->updated_at)->format('d-m-Y  h:i:s A') }}</span>
                                        
    
                                        Ticket N°: {{ $cuenta->id }}<br>
				<div class="table-responsive">     
					<table class="table table-striped table-bordered table-hover ">
						<tr>
							<th align="center">Cantidad</th>
							<th align="center">Producto</th>
							<th align="center">Precio</th>
						</tr>
						<?php $sum = 0; ?>
						@foreach($cuenta->Products as $Product)      
							<tr>
								<td align="center">{{$Product->pivot->cantidad}}</td>
								<td align="center">{{$Product->NombreProducto}}</td>
								<td align="center"><span class="price">$ {{$Product->precio}} </spam> </td>
							</tr>
							<?php $sum += $Product->precio; ?>
						@endforeach
						<tr >
							<td></td>
							<td>Total</td>
                            <td class="info" align="center"> <span class="price">$ {{$sum}}</span> </td>
						</tr>
					</table>
				</div>
			</div>              

			<div class="panel-footer">
				<div class="row">
					<!--Boton Agregar mas productos-->
					<div class="col-lg-6 col-md-6  col-sm-6 col-xs-6">      
						<a class="btn btn-default btn-block margen-inferior1" href="{{ URL::previous() }}" role="button">Regresar</a>
					<!-- -->
					</div>
								
					<!--Boton Previsualizar ticket-->
					<div class="col-lg-6 col-md-6  col-sm-6 col-xs-6">
						@if ( count($cuenta->Products) )
						<a class="btn btn-default btn-block" href="{{url('/ticket/'.$cuenta->id)}}" role="button" target="_blank">Cobrar</a>
						@else
						<a class="btn btn-default btn-block disabled" href="{{url('/ticket/'.$cuenta->id)}}" role="button">generar ticket</a>
						@endif
					</div>	
				</div>  
			</div>     
		</div>
	</div>
</div>

@endsection
