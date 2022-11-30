# Routing

## Componentes a usar en las demos

```bash
$ composer require doctrine/annotations
$ composer require --dev symfony/maker-bundle
```

📚**Documentación** [https://symfony.com/doc/current/routing.html](https://symfony.com/doc/current/routing.html)

## 🔍 Depuración de rutas

Esta opción nos permite **depurar** el sistema de enrutado aportando información sobre la ejecución real del framework.

- Listado de las todas las rutas: `php bin/console debug:router`
- Información sobre una ruta específica: `php bin/console debug:router <route-name>`, por ejemplo `php bin/console debug:router article_show`
- Testear una URL: `php bin/console router:match <relative-url>`, por ejemplo `php bin/console router:match /blog/my‐latest‐post`

## Restricciones

### Matching HTTP Methods

```php
/**
 * @Route("/api/posts/{id}", methods={"GET","HEAD"})
 */
public function show(int $id): Response
{
// ... return a JSON response with the post
}
```
```php
#[Route('/api/posts/{id}', methods: ['GET', 'HEAD'])]
public function show(int $id): Response
{
// ... return a JSON response with the post
}
```

### Sub-Domain Routing

```php
/**
 * @Route("/", name="mobile_homepage", host="m.example.com")
 */
public function mobileHomepage(): Response
{
  // ...
}
```
```php
#[Route('/', name: 'mobile_homepage', host: 'm.example.com')]
public function mobileHomepage(): Response
{
  // ...
}
```
```php
/**
 * @Route(
 * "/",
 * name="mobile_homepage",
 * host="{subdomain}.example.com",
 * defaults={"subdomain"="m"},
 * requirements={"subdomain"="m|mobile"}
 * )
 */
public function mobileHomepage(): Response
{
// ...
}
```
```php
#[Route(
  '/',
  name: 'mobile_homepage',
  host: '{subdomain}.example.com',
  defaults: ['subdomain' => 'm'],
  requirements: ['subdomain' => 'm|mobile'],
)]
public function mobileHomepage(): Response
{
// ...
}
```

### Localized Routes (i18n)

```php
/**
 * @Route({
 * "en": "/about-us",
 * "nl": "/over-ons"
 * }, name="about_us")
 */
public function about(): Response
{
// ...
}
```
```php
#[Route(path: [
  'en' => '/about-us',
  'nl' => '/over-ons'
], name: 'about_us')]
public function about(): Response
{
// ...
}
```