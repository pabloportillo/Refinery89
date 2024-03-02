# Proyecto Refinery89

Este es el repositorio para el proyecto Refinery89. Este proyecto es una aplicación web desarrollada con Laravel 10.

## ⚠️ Nota importante
Por problemas de compatibilidad de versiones y falta de tiempo no me ha sido posible usar tailwind en el proyecto aunque si está instalado.

## Requisitos

- PHP >= 7.4
- Composer
- Node.js >= 14
- npm >= 7
- MySQL >= 5.7

## Instalación

1. Clona este repositorio en tu máquina local:

git clone https://github.com/pabloportillo/refinery89.git

2. Instala las dependencias de PHP con Composer:

composer install

3. Copia el archivo de configuración `.env.example` y crea tu propio archivo `.env`. Luego, configura las variables de entorno necesarias, como la conexión a la base de datos.

cp .env.example .env

4. Genera una nueva clave de aplicación:

php artisan key:generate

5. Ejecuta las migraciones de la base de datos para crear las tablas necesarias, ó si lo deseas tambien puedes importar la base de datos que he añadido en /database de nombre "laravel.sql":

php artisan migrate

6. Instala las dependencias de Node.js:

npm install

7. Compila los assets de Vue.js:

npm run dev

## Uso

Una vez que hayas completado los pasos de instalación, puedes iniciar el servidor de desarrollo de Laravel con el siguiente comando:

php artisan serve

Luego, puedes acceder a la aplicación en tu navegador visitando la URL http://localhost:8000.

Para listar departamentos:
http://localhost:8000/departments

Para listar usuarios:
http://localhost:8000/users

Para asignar usuarios a departamentos:
http://127.0.0.1:8000/department_users

Para lanzar los test unitarios:

php artisan test


## Licencia

Este proyecto está bajo la Licencia MIT. Para más detalles, consulta el archivo LICENSE.
