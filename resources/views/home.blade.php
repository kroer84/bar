@extends('layouts.app')

@section('content')
<!--Container con un formulario para poder crear un ticket nuevo 
El usuario debera proporcionar un nombre para poder proceder -->
        <div class="container margen-inferior">
            <form data-toggle="validator" role="form" method="post" action="#" class="form-inline">
                  <div class="form-group">
                    <label for="cliente">Cliente:</label>
                    <input type="text" name="nombre" class="form-control" id="cliente" data-error="Ingresa nombre del cliente" required>
                  </div>
                  <button type="submit" class="btn btn-default">Crear cuenta</button>
                  <input type="hidden" name="_token" value="{{ csrf_token() }}">
            </form>
        </div>

        <br>
        <!--Contenedor de los tickets-->
        <div class="container">
          <div class="row">
            <div class="col-md-6">
              <div class="panel panel-default">

                <div class="panel-heading">Cliente: Jorge</div>
                <div class="panel-body">
                  <p>
                    Fecha: 6:22 pm<br>
                    No. de ticket:1<br>
                  </p>
                            
                  <div class="table-responsive">
                          
                    <table class="table table-striped table-bordered table-hover ">
                      <tr>
                        <th>Cantidad</th>
                        <th>Producto</th>
                        <th>Precio</th>
                      </tr>
                                  
                      <tr>
                        <td>3</td>
                        <td>Cerveza</td>
                        <td>150</td>
                      </tr>
                      <tr >
                        <td></td>
                        <td >Total</td>
                        <td class="info">150</td>
                      </tr>
                    </table>
                  </div>
                </div>              
                  <!--Contenedor Row de acciones para cada ticket-->
                <div class="panel-footer">
                  <div class="row">
                        <!--Boton Agregar mas productos-->
                        <div class="col-lg-6 col-md-6  col-sm-6 col-xs-6">
                          <a class="btn btn-default" href="" role="button"> Agregar productos</a>
                        </div>
                                      
                        <!--Boton Previsualizar ticket-->
                        <div class="col-lg-6 col-md-6  col-sm-6 col-xs-6">
                          <a class="btn btn-default" href="" role="button">Mas Opciones</a>
                        </div>
                                  
                    </div>  
                </div>     
                
              </div>
            </div>
              <!--Debe haber un contador para que cada dos tarjetas se coloque
              el siguiente  clearfix para evitar que se descuadren las tarjetas
              <div class="clearfix visible-lg-block visible-md-block"></div>-->
          </div>
        </div>
  <!--Fin de Contenedor de los tickets-->
@endsection
