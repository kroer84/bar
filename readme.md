## Descripción general
El proyecto sirve como un software de punto de venta permitiendo llevar el registro de los pedidos que hacen los clientes 
en sus respectivas cuentas, cuenta con paneles para agregar sus propios productos , añadir nuevas categorías para poder
localizar a los productos de una forma mas rápida a la hora de hacer un pedido. generación de ticket en pdf y también se puede llevar los estados de los pedidos pasando por diferentes estados para saber en que momento se encuentra incluyendo el historial de los mismos.
Cada Mesero va a poder llevar el control de sus pedidos y agregar mas productos a las cuentas.
El usuario administrador sera capaz de crear las cuentas del tipo mesero ademas de las funciones de añadir nuevos productos o crear nuevas categorías.

## Proceso de instalación

1. Clonar el repositorio con el siguiente comando: ```git clone https://github.com/kroer84/bar.git```

2. Agarrar el archivo **.env.example** para poder crear el archivo **.env.** Configure lo siguiente: 
* DB_DATABASE
* DB_USERNAME
* DB_PASSWORD

3. Realice un ```composer update``` en la carpeta del proyecto
4. Genere la **APP_KEY** para el proyecto con el comando: ```php artisan key:generate```
5. Copie la llave en el archivo **.env**
6. Se necesita la instalar el paquete **barryvdh/laravel-dompdf** con el comando:```composer require barryvdh/laravel-dompdf```
7. Por ultimo realice un ```composer update```

## Roles de usuarios
El proyecto cuenta con dos tipos de usuarios:
* Mesero
* administrador

**Mesero:** Mesero va a poder crear nuevas cuentas que automáticamente se pondrán en el estado de "En espera de pedido" y agregar productos a la cuenta, el mesero unicamente tendrá acceso a sus propias cuentas, podrá modificar el pedido en caso de tener un error y al final podrá mandar a imprimir el ticket. Una vez impreso el ticket el estado de la cuenta pasa a el estado "En espera de pago" en la ventana principal una vez que haya recibido el pago lo confirma para que la cuenta pase al estado de "historial". Una vez en este estado no podrá manejar mas la cuenta.

**Administrador**
El administrador tendrá acceso a todas las cuentas de los meseros , ademas de que la cuenta administradora será la única capaz de volver a reactivar tickets y volver a generar los pdfs para la impresión de tickets y las mismas acciones que puede hacer el usuario mesero.
El usuario administrador va a tener acceso a los siguientes paneles:
* Panel de productos
* Panel de categorías
* Panel de usuarios

## Ventana principal 
En la ventana principal se mostraran las cuentas activas , donde se mostraran por tarjetas los siguientes detalles:
* Nombre de cliente
* Hora de llegada
* Numero de ticket
* El total de su cuenta
* Estado de la cuenta
* Boton de "Agregar producto"
* Boton de "Detalles"

Si la cuenta se encuentra vaciá entonces el botón de "Detalles" se convertirá en el botón de "Eliminar cuenta"
Una vez que se ha generado el pdf para la impresión de ticket los botones cambiaran a :
* Botón de Confirmar pago"
* "Volver a imprimir"

Los estados del ticket serán los siguientes:
1. En espera de pedido
2. Orden confirmada
3. Cuenta por pagar
4. Cerrada 

## Panel de productos
El usuario administrador podrá meter manualmente los productos que necesite.
Los productos contendrán los siguientes campos:
* Nombre
* Precio 
* Categoría

Ademas de las acciones de: 
* Crear categoría 
* Editar categoría
* Eliminar categoría

Para poder tener una mejor eficiencia a la hora de pedir pedidos es necesario poner todos los productos en alguna categoría.
Sera necesario crear primero una categoría para después crear los productos.

## Panel de categorías
En el panel de categorías se va a mostrar cuales son las existentes en el proyecto actual , ademas de las acciones de: 
* Crear categoría 
* Editar categoría
* Eliminar categoría

**PRECAUCIÓN:** Cuando una categoría es eliminada se eliminan automáticamente todos los productos que contenga la categoría.

## Panel de usuarios
Se mostraran los usuarios que actualmente pueden entrar al sistema, ademas de las acciones de: 
* Crear usuario
* Editar usuario
* Eliminar usuario

Unicamente los usuarios que cuenten con una cuenta podrán entrar al sistema.
 
## Generación de Ticket
Los elementos que contendrá al ticket serán los siguientes:
* Logotipo de la empresa
* Nombre de la empresa
* Dirección de la empresa
* Correo de la empresa
*  Teléfono
* RFC
* Numero de ticket
* Fecha de emisión
* Hora de emisión
* Productos consumidos

* Subtotal
* Total
* Mensaje de "Gracias por su compra"