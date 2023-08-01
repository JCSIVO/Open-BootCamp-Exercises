## Levantar contenedores

```bash
$ docker-compose up -d
```

## Acceder al contenedor de PHP

```bash
$ docker exec -ti symfony_php bash
```

## Instalar dependencias de PHP dentro del contenedor

```bash
$ docker exec -ti symfony_php bash

# composer install
```

## Entrar a PhpMyAdmin

Para entrar a ver phpmyadmin accede a [http://localhost:8080](http://localhost:8080)

Y coloca como:
* servidor `db`
* user, el usuario de la bd
* password, el password del user de la bd

Para entrar a ver el proyecto accede a [http://localhost:80](http://localhost:80)