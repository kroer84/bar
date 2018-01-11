@extends('layouts.app')

@section('content')
<!--Container con un formulario para poder crear un ticket nuevo 
El usuario debera proporcionar un nombre para poder proceder -->

        @foreach ($counts as $count)

        
        <!--Contenedor de los tickets-->
        <div class="container">
          <div class="row">
            <div class="col-md-6">
              <div class="panel panel-default">

                <div class="panel-heading"> <p> Cliente: {{ $count->NombreCliente}}</p><p class="text-right">{{ $count->StateCount->NombreEstado }}</p></div>
                <div class="panel-body">
                  <p>
                    Fecha/hora: {{ $count->created_at}}<br>
                    No. de ticket: {{ $count->id }}<br>
                  </p>
                            
                  <div class="table-responsive">
                          
                    <table class="table table-striped table-bordered table-hover ">
                      <tr>
                        <th>Cantidad</th>
                        <th>Producto</th>
                        <th>Precio</th>
                      </tr>
                      @foreach($count->Products as $Product)      
                      <tr>
                        
                        <td>{{$Product->pivot->cantidad}}</td>
                        <td>{{$Product->NombreProducto}}</td>
                        <td>{{$Product->precio}}</td>
                      </tr>
                      @endforeach
                      <tr >
                        <td></td>
                        <td >Total</td>
                        <td class="info">Total</td>
                      </tr>
                      
                    </table>
                  </div>
                </div>              
                
                  <!--Contenedor Row de acciones para cada ticket-->
                <div class="panel-footer">
                 @if(Auth::user()->rol=='admin')
                  <div class="row">
                        <!--Boton Agregar mas productos-->
                        <div class="col-lg-6 col-md-6  col-sm-6 col-xs-6">
                          <a class="btn btn-default btn-block" href="{{ route('agregar_producto',1) }}" role="button"> Agregar productos</a>
                        </div>
                                      
                        <!--Boton Previsualizar ticket-->
                        <div class="col-lg-6 col-md-6  col-sm-6 col-xs-6">
                          <a class="btn btn-default btn-block" href="{{url('/count/'.$count->id)}}" role="button">Detalles</a>
                        </div>
                        @else
                      <p>Si necesita reactivar un ticket o volver a imprimir un ticket contacte con el administrador</p> 
                    @endif       
                    </div>  
                </div>     
                
              </div>
            </div>

            @endforeach
              <!--Debe haber un contador para que cada dos tarjetas se coloque
              el siguiente  clearfix para evitar que se descuadren las tarjetas
              <div class="clearfix visible-lg-block visible-md-block"></div>-->
          </div>
        </div>
  <!--Fin de Contenedor de los tickets-->
@endsection
