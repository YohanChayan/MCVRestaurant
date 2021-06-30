# DrPet 

![](public/img/Dashboard-M.png)

MCV Restaurant es una aplicación que permite a los clientes de un restaurant ordenar sin necesidad de registrarse en un sistema y que hace facil la gestión de un restaurante. Simplemente entras, ordenas tu pedido y lo recoges.

---
## Instrucciones de instalación 

1. Clonar proyecto `git clone https://github.com/YohanChayan/MCVRestaurant`
2. Cambiarse a directorio `cd MCVRestaurant` 
3. Instalar dependiencias mediante composer: `composer install`
4. Crear archivo de variables de entorno: `cp .env.example .env`
5. Crear llave: `php artisan key:generate`
6. Configurar nombre de base de datos en .env
7. Ejecutar las migraciones: `php artisan migrate --seed`
8. Linkear storage con el public, para mostrar imágenes: `php artisan storage:link`  

9. Al ejecutar `php artisan migrate --seed` genera los datos de pruebas, en estos se genera un usuario inicial de tipo gerente que servira para iniciar sesion y poder hacer uso de sus funcionalidades, una de ellas consiste en agregar usuarios de tipo Jefe de meseros que a su vez tambien podran iniciar sesion y asi acceder sus funcionalidades desarrolladas también, los datos para iniciar sesion del gerente: correo: gerente@gmail.com, contraseña: MasterGerente.


## Extra

- Tiene que tener instalado php.

Algunos comandos que pueden ser de utilidad para cargar las vistas por completo:
- npm install.
- npm run dev.

Si quiere iniciar sesión con Google tiene que:
- tener la aplicación con el siguiente nombre `http://mcvrestaurant.org`




---

## Desarrollo
- Implementado con Laravel (v8)

## Para acceder al envío de Emails
- Tener una cuenta en https://mailtrap.io/
- Configurar la sección de email en el .env con sus credenciales de mailtrap
- Usamos el host stmp.mailtrap.io
- Usamos el puerto 2525
- Usamos la encriptación tls

## Autores
- Adrián Estévez
- Yohan Chayan   

*Derechos reservados.*
