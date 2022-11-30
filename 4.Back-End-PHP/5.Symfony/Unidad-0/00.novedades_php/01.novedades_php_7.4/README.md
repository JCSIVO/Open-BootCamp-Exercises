## Levantar contenedores

```bash
$ docker-compose up -d
```

## Acceder al contenedor de PHP

```bash
$ docker exec -ti php_8_app bash
```

## Instalar dependencias de PHP dentro del contenedor

```bash
$ docker exec -ti php_8_app bash

# composer install
```

## Tumbar contenedores

```bash
$ docker-compose down
```

Para entrar a ver el proyecto accede a [http://localhost:8000](http://localhost:8000)