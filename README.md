Este repositorio es el backend para la prueba de desarrollo en GlobalSTD.

## Consumo de la API

Para consumir la deberá requerir el token de acceso en [https://globalstdapi.christianmtz.com/api/auth](https://globalstdapi.christianmtz.com/api/auth).

## Instalar el proyecto de forma local

Para instalar el proyecto de forma local deberá clonar el repositorio:

```git clone https://github.com/Chris7ca/gloablstdapi.git```

```cd gloablstdapi```

```composer install```

```cp .env.example . .env```
 
*Configure las variables de entorno correspondientes a su base de datos [DB_HOST, DB_PORT, DB_DATABASE, DB_USERNAME, DB_PASSWORD] que previamente deberá crear en MySQL, MariaDB o PostgreSQL con el nombre que desee, solo asegúrese de establecer este nombre en la configuración.*

Posteriormente corra las migraciones y seeders

```php artisan migrate --seed```

Opcionalmente puede ejecutar:

```php artisan config:cache```

```php artisan route:cache``` 
