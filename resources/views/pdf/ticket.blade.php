<!DOCTYPE html>
<html lang="en">
<style>

header{
    display: block;
    text-align: center;
}
img {
    widows: 150px;
    height: 150px;
}
.text{
    display: block;
    text-align: center;
}

.margen0{
    margin: 0 auto;
}

.center{
    text-align: center;
}

.max {
    max-width: 350px;
}

th, td {
    padding: 0px 5px 0px 5px;
    text-align: left;
}

@page { size: 12cm 40cm; }

</style>
<body>
   <header>
       <div class="container">
         <img src="img/logo_ticket.png" alt="">
       </div>
   </header>
    <div class="container">
        <section class="main row">
            <article class="col-md-12">
                <p class=" text"></p>
                <p class=" text"></p>
                <p class=" text"> Teléfono:{{ $data['telefono'] }}</p>
            </article>
        </section>
    </div>
        <div class="container">
        <section class="main row">
            <article class="col-md-12">
                <p class=" text">Número de ticket:{{$cuenta->id}}</p>
                <p class=" text">Fecha de emisión:
                {{Carbon\Carbon::parse($cuenta->updated_at)->format('d-m-Y')}}
                
                <p class=" text"> Hora de emisión: 
                    {{Carbon\Carbon::parse($cuenta->updated_at)->format('h:i:s A')}}
                </p>
                <p class=" text">Atendido por: {{$user->name}} </p>
            </article>
        </section>
        <div class="container">
            <div class="max margen0">
            <div class="table-responsive">
                <table class="table " border="0">
                    <tr>
                        <th class="center">Cantidad</th>
                        <th class="center">Producto</th>
                        <th class="center">Costo</th>
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
                    <tr>
                        <td></td>
                        <th>Subtotal</th>
                        <th><span class="price">$ {{$sum}}</span> </td>
                    </tr>
                </table>
            </div>
            <p class=" text"> Servicio</p>
            <div class="table-responsive">
                <table class="table margen0" border="0">
                    <tr >
                        <td> Sugerido 10%</td>
                        <td> {{$sum*0.10}}</td>
                    </tr>
                    <tr >
                        <th>Total</th>
                        <th>{{$sum*1.1}}</th>
                    </tr>
                </table>
                </div>
                <p class=" text"> Gracias por su compra</p>
            </div>
        </div>  
    </div>
</body>
</html>