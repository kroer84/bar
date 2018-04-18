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
                                    @break

                                @case(2)
                                    <div class="panel panel-primary">
                                    @break
                                
                                @case(3)
                                    <div class="panel panel-danger">
                                    @break

                                @default
                                    <div class="panel panel-default">
                            @endswitch
                            
                                <div class="panel-heading"> 
                                    <h3 align="center"> Cliente: {{ $count->NombreCliente}}|{{$count->user_id}} <h3>
                                </div>
                                <div class="panel-body">
                                    <p class="text-right">{{ $count->StateCount->NombreEstado }}</p>
                                    <p>
                                        {{ Carbon\Carbon::parse($count->created_at)->format('d-m-Y  h:i:s A') }}
                                        {{ Carbon\Carbon::parse($count->updated_at)->format('d-m-Y  h:i:s A') }}
                                        <br>
                                        No. de ticket: {{ $count->id }}<br>
                                    </p>
                                    <div class="table-responsive">     
                                        <table class="table table-striped table-bordered table-hover ">
                                            <?php $sum = 0; ?>
                                            @foreach($count->Products as $Product)      
                                            
                                                <?php $sum += $Product->precio; ?>
                                            @endforeach

                                            <tr >
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
                                            <a class="btn btn-default btn-block margen-inferior1" href="{{ url('/agregar/'.$count->id) }}" role="button">Agregar productos</a>
                                        <!-- -->
                                        </div>
                                                    
                                        <!--Boton Previsualizar ticket-->
                                        <div class="col-lg-6 col-md-6  col-sm-6 col-xs-6">
                                            <a class="btn btn-default btn-block" href="{{url('/cuentas/'.$count->id)}}" role="button">Detalles</a>
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
