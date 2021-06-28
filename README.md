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
7. Ejecutar las migraciones: `php artisan migrate`
8. Linkear storage con el public, para mostrar imágenes: `php artisan storage:link`

## Extra

- Tiene que tener instalado php.

Algunos comandos que pueden ser de utilidad para cargar las vistas por completo:
- npm install.
- npm run dev.

---

## Desarrollo
- Implementado con Laravel (v8)

## Para acceder al envío de Emails
- Tener una cuenta en https://mailtrap.io/
- Configurar la sección de email en el .env con sus credenciales de mailtrap

## Autores
- Adrián Estévez
- Yohan Chayan   

*Derechos reservados.*
