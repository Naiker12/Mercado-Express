![Logo](https://dev-to-uploads.s3.amazonaws.com/uploads/articles/th5xamgrr6se0x5ro4g6.png)

## Mercador Express

Bienvenidos a la documentación de Mercador Express, una tienda virtual diseñada para ofrecer una experiencia de compra online ágil, segura y confiable. Este proyecto ha sido desarrollado con tecnologías modernas y buenas prácticas de programación, con el objetivo de crear un sistema de comercio electrónico eficiente, fácil de usar y escalable. En esta documentación, encontrarás todos los detalles necesarios para configurar y ejecutar el proyecto, así como las características principales y las tecnologías utilizadas.

## Requisitos para instalar el proyecto

A continuación, te indicamos los pasos para instalar y poner en marcha Mercador Express en tu máquina local.

## 1. Requisitos previos

Asegúrate de tener instalados los siguientes programas en tu sistema:

- PHP: versión 8.x o superior.
- Composer: gestor de dependencias de PHP
- XAMPP: para gestionar servidores locales Apache y MySQL.
- Node.js: para la gestión de dependencias de JavaScript.
- PHPMailer: para el envío de correos electrónicos.

## Instalación

Sigue estos pasos para tener el proyecto corriendo en tu máquina:

- Clona el repositorio:
```bash
  git clone https://github.com/tuusuario/mercador-express.git
```
- Instala las dependencias de PHP con Composer: Navega al directorio del proyecto y ejecuta el siguiente comando:
```bash
  cd mercador-express
  composer install
```
- Configura el entorno: Copia el archivo .env.example y renómbralo como .env:
```bash
  cp .env.example .env
```

- Genera la clave de la aplicación:
 ```bash
  php artisan key:generate
 ```
- Configura la base de datos: Modifica el archivo .env para establecer los datos de conexión a la base de datos de tu servidor local (XAMPP).
 ```bash
  php artisan migrate
 ```
- Inicia el servidor de desarrollo:
   ```bash
   php artisan serve
   ```
- Instala las dependencias de Node.js (si es necesario):
   ```bash
    npm install
   ```
- Inicia el servidor de frontend:
   ```bash
    npm run dev
  ```
- Configura PHPMailer: Asegúrate de configurar correctamente el servicio de correo electrónico en el archivo .env para poder enviar correos.

  ## Tecnologías utilizadas
  - PHP: Lenguaje principal para el backend del proyecto.
  - Laravel: Framework de PHP para facilitar el desarrollo web.
  - Composer: Gestor de dependencias para PHP.
  - XAMPP: Servidor local para pruebas de PHP y MySQL.
  - JavaScript (JS): Para la interacción dinámica en el frontend.
  - PHPMailer: Biblioteca para el envío de correos electrónicos desde el backend.
  - APIs: Mercado Pago, PayPal.
 
    ## Funciones del proyecto
    Mercador Express es una plataforma de comercio electrónico que permite realizar compras de manera sencilla. A continuación, se detallan las funciones más relevantes del proyecto:

    ## 1. Registro y autenticación de usuarios:
    - Registro de usuarios con correo electrónico y contraseña.
    - Funcionalidad de inicio de sesión y recuperación de contraseña.
    - Gestión de perfil de usuario.
   
    ## 2. Catálogo de productos:
    - Visualización de productos con sus respectivas categorías y descripciones.
    - Filtros avanzados de búsqueda (por precio, por categoría, por popularidad, etc.).
   
    ## 3. Carrito de compras:
    - Agregar, editar y eliminar productos en el carrito.
    - Visualización del total y envío a la página de pago.
   
    ## 4. Proceso de pago y facturación:
    - Integración con Mercado Pago y PayPal para pagos en línea.
    - Generación de factura electrónica con integración con la DIAN (Dirección de Impuestos y Aduanas Nacionales de Colombia).
      
    ## 5. Gestión de órdenes:
    - Seguimiento de pedidos, desde la compra hasta la entrega.
    - Notificaciones por correo electrónico con el estado de la orden.
   
    ## 6. Admin Panel:
    - Panel de administración para gestionar productos, categorías y pedidos.
    - Estadísticas sobre ventas y usuarios.

    ## 7. Seguridad y privacidad:
    - Cifrado de contraseñas utilizando bcrypt.
    - Protección contra CSRF y XSS.
   
    ## Patrones de diseño y arquitectura
    El proyecto ha sido desarrollado siguiendo buenas prácticas y principios de diseño de software para garantizar la escalabilidad y mantenibilidad:
    -  Clean Code: Se ha priorizado un código legible, comprensible y modular, siguiendo las recomendaciones del libro "Clean Code" de Robert C. Martin.
    -  Clean Architecture: Se ha utilizado una arquitectura limpia para separar la lógica de negocio, la presentación y los detalles de implementación. Esto facilita la escalabilidad y el mantenimiento.
    -  Patrones de diseño: Se han implementado patrones de diseño como MVC (Modelo-Vista-Controlador), Singleton y Factory para organizar el código de forma eficiente.
   
    ## Diagramas UML utilizados
    Para la planificación y diseño del sistema, se crearon los siguientes diagramas UML:
    - Diagrama de casos de uso: Describe las interacciones entre los usuarios y el sistema.
    - Diagrama de clases: Muestra las clases principales y sus relaciones.
    - Diagrama de secuencia: Detalla el flujo de mensajes entre los objetos.
    - Diagrama de componentes: Representa la arquitectura de los componentes del sistema.
    - Diagrama de actividades: Describe los flujos de trabajo del sistema.
   
    ## Ventajas y desventajas de Mercador Express
    - Ventajas
      | Ventaja | Descripción |
      | ------ | ------ |
      | Escalabilidad | El sistema está diseñado para ser fácilmente escalable y expandirse. |
      | Fácil mantenimiento	 | Gracias a la arquitectura limpia y los patrones de diseño, el código es fácil de mantener y actualizar. |
      | Integración con APIs de pago	 | Permite realizar pagos de forma segura mediante Mercado Pago y PayPal. |
      | Generación automática de facturas	 | Cumple con las normativas fiscales de la DIAN, generando facturas electrónicas. |

    - Desventajas
      | Desventaja | Descripción |
      |------------ | ----------- |
      | Dependencia de APIs externas	| La dependencia de servicios de terceros como Mercado Pago y PayPal puede generar problemas si las APIs dejan de funcionar. |
      | Curva de aprendizaje	| Al utilizar patrones y arquitecturas complejas, los nuevos desarrolladores pueden tardar más en entender el código.

      ## Razón para usar este proyecto como proyecto de aula
      Este proyecto ha sido diseñado con el objetivo de aplicar conocimientos avanzados en desarrollo web, bases de datos y arquitectura de software. Es ideal como proyecto de aula porque permite poner en práctica conceptos de:
      - Desarrollo backend y frontend.
      - Integración de servicios de pago.
      - Diseño de sistemas escalables y mantenibles.
     
      ## Persona encargada del proyecto
       - Nombre del desarrollador: Naiker Gomez Caraballo.
       - Fecha de inicio: 10/09/2024
       - Tecnologías utilizadas: PHP, Laravel, JavaScript, Mercado Pago, PayPal, DIAN.
      
