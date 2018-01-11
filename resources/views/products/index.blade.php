@extends('layouts.app')

@section('content')
<!--Container con un formulario para poder crear un ticket nuevo 
El usuario debera proporcionar un nombre para poder proceder -->

        <div class="container">
          <div class="row">
            <div class="col-md-10 col-md-offset-1">
              <div class="panel panel-default">

                <div class="panel-heading text-center">Panel De Productos</div>
                <div class="panel-body">
                            
                    <div class="table-responsive">
                          
                      <table class="table table-striped table-bordered table-hover ">
                        <tr>
                          <th class="text-center">Nombre Del Producto</th>
                          <th class="text-center">Nombre De Categoria</th>
                          <th class="text-center">Precio</th>
                          <th class="text-center">Acciones</th>
                        </tr>
                        <!--foreach($products as $product)-->
                        <tr>
                          <td><!--$product->NombreProducto --></td>
                          <td><!--$product->category->NombreCategoria --></td>
                          <td>$ <!--$product->precio --></td>
                          <td>
                            <div class="col-lg-6 col-md-6 col-sm-6 margen-inferior0">
                              <a class="btn btn-default btn-block btn-sm" href="#" role="button">Editar</a>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                              <!--include('products.delete',['product'=> $product])-->
                            </div>
                          </td>
                        </tr>
                        <!--endforeach-->
                    
                      </table>
                    </div>
                </div>                 
                
              </div>
            </div>
              <!--
              <div class="floating">
	<a href="#" class="btn btn-primary btn-fab">
		<i class="material-icons">add</i>
	</a>
</div>
              -->
          </div>
        </div>
  <!--Fin de Contenedor de los tickets-->
@endsection
