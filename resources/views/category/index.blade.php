@extends('layouts.app')

@section('content')
<!--Container con un formulario para poder crear un ticket nuevo 
El usuario debera proporcionar un nombre para poder proceder -->

        <div class="container">
          <div class="row">
            <div class="col-md-10 col-md-offset-1">
              <div class="panel panel-default">

                <div class="panel-heading text-center">Panel De Categorias</div>
                <div class="panel-body">
                            
                    <div class="table-responsive">
                          
                      <table class="table table-striped table-bordered table-hover ">
                        <tr>                          
                          <th class="text-center">Nombre De Categoria</th>
                          <th class="text-center">Acciones</th>
                        </tr>
                        <!--foreach($categories as $categorie)-->
                        <tr>
                          <td><!-- $categorie->NombreCategoria --></td>
                          <td>
                            <div class="col-lg-3 col-lg-offset-3 col-md-3 col-md-offset-3 col-sm-6 col-sm-offset-0 margen-inferior0">
                              <a class="btn btn-default btn-block btn-sm" href="" role="button">Editar</a>
                            </div>
                            <!--include('categories.delete',['category'=> $categorie])-->
                            
                          </td>
                        </tr>

                        <!--endforeach

                      </table>
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
