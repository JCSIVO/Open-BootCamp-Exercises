# Routing

## Componentes a usar en las demos

```bash
$ composer require doctrine/annotations
$ compsoer require --dev symfony/debug-bundle
$ compsoer require --dev symfony/web-profiler-bundle
$ composer require symfony/asset
# nuevos componentes
$ composer require symfony/orm-pack
$ composer require --dev symfony/maker-bundle
```

## Comando para crear una base de datos

```bash
$ php bin/console doctrine:database:create
```
## generar una nueva migracion

```bash
$ php bin/console make:migration
```

### aplicar una migración

```bash
$ php bin/console doctrine:migrations:migrate
```

### Generate entities from Database

Para generar las entidades a partir de una estructura de datos ya generada en **Mysql** ejecutaremos alguno de los siguientes comandos:

* `php bin/console doctrine:mapping:import 'App\Entity' annotation --path=src/Entity`, crea las entidades desde la Base de Datos, usando un tipo **Annotation** ubicado en [src/Entity](./src/Entity).
* `php bin/console doctrine:mapping:import 'App\Entity' xml --path=config/doctrine`, crea las entidades desde la Base de Datos, usando un tipo **xml** ubicado en [/config/doctrine](./config/doctrine)
* `php bin/console doctrine:mapping:import 'App\Entity' yaml --path=config/doctrine`, crea las entidades desde la Base de Datos, usando un tipo **yaml** ubicado en [config/doctrine](./config/doctrine).

## métodos por defecto de doctrine 

* `find()`
* `findOneByXXX()`
* `findByXXX()`
* `findAll()`
* `findOneBy()`
* `findBy()`

📚**Documentación** [https://symfony.com/doc/current/doctrine.html](https://symfony.com/doc/current/doctrine.html)
