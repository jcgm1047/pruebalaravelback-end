# **Prueba Laravel/ Vue Enlaces Estrategicos**
## Instalación
1. Abre tu terminal o línea de comandos y navega hasta la carpeta donde deseas clonar el proyecto. Puedes utilizar el comando cd para navegar entre las carpetas.

2. Asegúrate de tener instalado Git en tu Pc. Si no lo tienes, puedes descargarlo desde la página oficial de Git.

3. En la terminal, escribe el siguiente comando` git clone https://github.com/jcgm1047/pruebalaravelback-end.git`


4. Presiona Enter y Git comenzará a descargar el repositorio en la carpeta actual.

5. Una vez que se complete la descarga, navega a la carpeta del proyecto utilizando el comando cd.

6. Verifica que tienes instalado Composer

7. Ejecuta el siguiente comando para instalar las dependencias del proyecto: `composer install`
8. Crea un archivo .env en la raíz del proyecto y copia el contenido del archivo .env.example en él.

9. Ejecuta el siguiente comando para generar una clave de aplicación: `php artisan key:generate`

10. Configura tu base de datos en el archivo .env. Por ejemplo, si estás usando MySQL, deberás establecer los siguientes valores:

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=pruebaee
DB_USERNAME=root
DB_PASSWORD=

11. Ejecuta las migraciones para crear las tablas en la base de datos:` php artisan migrate`

12.  Finalmente, ejecuta el servidor web local de Laravel: `php artisan serve`

### Con estos pasos, deberías tener el proyecto clonado y funcionando en tu computadora local.

