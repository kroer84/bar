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
                <p class=" text">Número de ticket:</p>
                <p class=" text">Fecha de emisión:</p>
                <p class=" text"> Hora de emisión: </p>
                <p class=" text">Atendido por:{{$user->name}} </p>
            </article>
        </section>
        <div class="container">
            <div class="max margen0">
                <table class="table " border="0">
                    <tr>
                        <th class="center">Cantidad</th>
                        <th class="center">Producto</th>
                        <th class="center">Costo</th>
                    </tr>
                    <tr >
                        <td> 1</td>
                        <td> Cerveza</td>
                        <td> $ 50</td>
                    </tr>
                    <tr >
                        <td> 3</td>
                        <td> Clamato especial con camaron</td>
                        <td> $ 150</td>
                    </tr>
                    <tr >
                        <td> 2</td>
                        <td> Mojito</td>
                        <td> $ 80</td>
                    </tr>
                    <tr>
                        <th>Subtotal</th>
                        <th></th>
                        <th>$280</th>
                    </tr>
                </table>
            </div>
            <p class=" text"> Servicio</p>
            <div class="table-responsive">
                <table class="table margen0" border="0">
                    <tr >
                        <td> Sugerido 10%</td>
                        <td> $ 14</td>
                    </tr>
                    <tr >
                        <th>Total</th>
                        <th>$280</th>
                    </tr>
                </table>
                <p class=" text"> Gracias por su compra</p>
            </div>
        </div>  
    </div>
</body>
</html>