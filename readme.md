## Descripción general
El objetivo principal del proyecto es dar a las Pymes una ventaja competitiva proporcionándoles un software que servirá como punto de venta.
El proyecto servirá para poder llevar las cuentas activas de los clientes en ese momento , ir agregando mas productos a sus cuentas y poder ser capaces de imprimir de una forma muy sencilla el ticket para el cliente.
Se proporcionará 3 diferentes paneles . uno para llevar el control de usuarios , otro para llevar el control de las categorías  y por último el que se encarga de llevar los  productos.
Existirá la pestaña de los reportes donde el cliente podrá ver que tanto se ha vendido durante el día o en una fecha en especifica.
Existirá la parte del historial de los tickets para en caso de que necesite volver a imprimir un ticket por cualquier tipo de error que se haya presentado.


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
El proyecto cuenta con 3 tipos de usuarios:
* Mesero
* Administrador mayor
* Administrador menor

**Mesero:** Mesero va a poder crear nuevas cuentas que automáticamente se pondrán en el estado de "En espera de pedido" y agregar productos a la cuenta, el mesero unicamente tendrá acceso a sus propias cuentas, podrá modificar el pedido en caso de tener un error y al final podrá mandar a imprimir el ticket. Una vez impreso el ticket el estado de la cuenta pasa a el estado "En espera de pago" en la ventana principal una vez que haya recibido el pago lo confirma para que la cuenta pase al estado de "historial". Una vez en este estado no podrá manejar mas la cuenta por lo que en caso de requerir volver a imprimir el ticket o reactivar la cuenta tendrá que solicitarlo al administrador menor o mayor.

**Administrador menor**
El administrador menor tendrá acceso a todas las cuentas de los meseros , ademas podrá volver a reactivar cuentas y la impresión de tickets y las mismas acciones que puede hacer el usuario mesero.

**Administrador mayor**
El usuario administrador mayor tendrá acceso a todo y sera la unica cuenta con acceso a lo siguiente:
* Panel de productos
* Panel de categorías
* Panel de usuarios
* Inventarios
* Reportes

## Requerimientos funcionales
* Llevar el control de las cuentas de los restaurantes
* Que cada mesero sea capaz de llevar las cuentas a través de un dispositivo móvil con navegador.
* Agregar productos a las cuentas de las personas que van accediendo al restaurante.
* Para agregar los productos primero van a aparecer las categorías para que su registro sea más fácil.
* Manejar los estados de la cuenta dependiendo de las acciones que se van realizando en ellas manteniendo los estados de : En espera de pedido, pedido confirmado , en espera de cobrar, historial.
* Modificación de pedido en caso de que la cuente este erronea
* Generar un pdf para la fácil impresión de los tickets de las personas con los datos descritos abajo.
* Manejo de usuarios para llevar el control de quien accede al sistema
* Manejo de las categorías de sus productos para que el registro de los productos a las cuentas sea de una forma más fácil para los meseros.
* Se podrá modificar la cuenta en caso de que se haya cometido un error al haber ingresado un producto.
* Se dispondrá de una vista para poder observar los tickets que han pasado a historial y en caso de querer reactivarlos se podrá hacer para seguir agregando productos a la cuenta.
* Si se requiere volver a imprimir el ticket podrá hacerse sin necesidad de volver a activar el ticket.
* Poder ver la existencia del inventario actual del sistema.
* Que no se pueda realizar una venta si no hay suficientes productos en el inventario.
* Cada vez que se haga una venta que se descuente en el inventario la cantidad.
* Panel para gestionar el inventario , agregar producto , editar producto , eliminar productos.
* Ver las existencias actuales del inventario
* Generación de reportes de lo vendido.
* Generación de reportes del inventario.

## Requerimientos no funcionales
* Protección contra ataques de inyección xss
* Protección contra ataques csrf
* Protección contra ataques inyección sql
* Protección contra ataques de fuerza bruta
* Protección de accesos no autorizados
* Protección contra asignación masiva
* Encriptación de contraseñas
* Hacer testing de caja blanca.
* Hacer testing de caja negra.
* Hacer testing de aceptación.
* Documentar código de app web.
* Creación de manual digital
* Verificación de campos numéricos
* Ningún formulario puede mandarse en blanco.
* Encriptación de contraseñas
* Se utilizará el ORM Eloquent para el manejo de base de de datos para compatibilidad de varias bases de datos además de la seguridad.
* Minificación de Css y Javascript
* Los usuarios de la base de datos deben de ser únicos
* Un solo archivo Css utilizando la paquetería de laravel mix y sass.
* Un solo archivo Javascript utilizando la paquetería de laravel mix y sass.
* Las rutas del proyecto pertenecientes a un crud deben de apegarse a la arquitectura Rest.

## Requerimientos de navegaciónn
* El acceso a las vistas no debe de exceder del quinto nivel de profundidad partiendo de la pantalla principal.
* Todas las transacciones realizadas a la base de datos deben de tener un mensaje de alerta informando al usuario el estado de la transacción sea exitoso, fracaso , error.
* Los botones en el formato móvil deben de tener una separación de 25 pixeles.
* El diseño debe de ser responsive.
* Ventanas de estatus de error para brindar ayuda al usuario del error que paso.

## Herramientas a utilizar
* Html5
* Css3
* Sass
* Javacript
* Jquery
* Bootstrap
* Php
* Laravel
* ORM Eloquent
* Mysql

## Casos de uso
17 casos de uso divididos en:
* Manejo de usuarios
* Manejo de productos
* Manejo de categorías
* Manejo de inventario
* Manejo de cuentas
* Manejo de reportes

## Testing
* Test cases
* Testing de aceptación
* Simulación
* Refactorización de código
* Correción de errores


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
 
## Generación de Ticket
Los elementos que contendrá al ticket serán los siguientes:
* Logotipo de la empresa
* Nombre de la empresa
* Dirección de la empresa
* Correo de la empresa
* Teléfono
* RFC
* Numero de ticket
* Fecha de emisión
* Hora de emisión
* Productos consumidos
* Subtotal
* Total
* Mensaje de "Gracias por su compra"