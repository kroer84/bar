@extends('layouts.app')

@section('content')

<!--Container con un formulario para poder crear un ticket nuevo 
El usuario debera proporcionar un nombre para poder proceder -->
<div class="container">
    <div class="row">
        @include('partials.alert')
		@include('partials.errors') 
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 align="center">Cuentas</h3>
            </div>
            <div class="panel-body">   
                <div>
                    @include('CRUD_Cuentas.form',['cuenta'=>$cuenta, 'url' => '/cuentas', 'method' => 'POST','before' => 'csrf'])
                </div> 
            </div>

            <div class="container">
                    @foreach ($counts as $key=>$count)
                        <div class="col-md-6">
                            @switch($count->status_counts_id)
                                @case(1)
                                    <div class="panel panel-success">
                                    <div class="panel-heading">
                                <span class="label label-success" style="float: right">{{ $count->StateCount->NombreEstado }}</span>
                                    <h3 align="left"> Cliente: {{ $count->NombreCliente}} <h3>
                                </div>
                                    @break

                                @case(2)
                                    <div class="panel panel-primary">
                                    <div class="panel-heading">
                                <span class="label label-primary" style="float: right">{{ $count->StateCount->NombreEstado }}</span>
                                    <h3 align="left"> Cliente: {{ $count->NombreCliente}} <h3>
                                </div>
                                    @break
                                
                                @case(3)
                                    <div class="panel panel-danger">
                                    <div class="panel-heading">
                                <span class="label label-danger" style="float: right">{{ $count->StateCount->NombreEstado }}</span>
                                    <h3 align="left"> Cliente: {{ $count->NombreCliente}} <h3>
                                </div>
                                    @break

                                @default
                                    <div class="panel panel-default">
                                    <div class="panel-heading">
                                <span class="label label-default" style="float: right">{{ $count->StateCount->NombreEstado }}</span>
                                    <h3 align="left"> Cliente: {{ $count->NombreCliente}} <h3>
                                </div>
                            @endswitch
                            
                                <div class="panel-body">
                            <span class="label label-default" style="float: right">{{ Carbon\Carbon::parse($count->created_at)->format('d-m-Y  h:i:s A') }}</span>
                                        
    
                                        Ticket N°: {{ $count->id }}<br>
                                    </p>
                                    <div class="table-responsive">     
                                        <table class="table table-striped table-bordered table-hover ">
                                            <?php $sum = 0; ?>
                                            @foreach($count->Products as $Product)      
                                            
                                                <?php $sum += $Product->precio; ?>
                                            @endforeach

                                            <tr >
                                            <td>N° de pedidos articulos <span class="badge"> {{$count->Products->count()}}</span></td>
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
                                            <a class="btn btn-default btn-block margen-inferior1" href="{{ url('/agregar/'.$count->id) }}" role="button"><span class="glyphicon glyphicon-plus"></span>  Agregar productos</a>
                                        <!-- -->
                                        </div>
                                                    
                                        <!--Boton Previsualizar ticket-->
                                        <div class="col-lg-6 col-md-6  col-sm-6 col-xs-6">
                                            @if ( count($count->Products) )
                                                <a class="btn btn-default btn-block" href="{{url('/cuentas/'.$count->id)}}" role="button"> <span class="glyphicon glyphicon-list-alt"></span> Detalles</a>
                                            @else
                                                <a class="btn btn-default btn-block disabled" href="{{url('/cuentas/'.$count->id)}}" role="button"> <span class="glyphicon glyphicon-list-alt"></span> Detalles</a>
                                            @endif

                                        </div>
                                                
                                    </div>  
                                </div>     
                
                            </div>
                        </div>
                    @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
