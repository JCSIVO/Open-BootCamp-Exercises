/*
DISTINCT
*/

-- 604 resultados 
SELECT * FROM address;

-- 604 resultados
SELECT district FROM address;

-- obtener distritos únicos 379 resultados
SELECT DISTINCT district FROM address;

-- 600 resultados
SELECT first_name FROM customer;

-- 592 resultados
SELECT DISTINCT first_name FROM customer;


/*
AND, OR, NOT
ORDER BY

AND: Se tiene que cumplir si o si las condiciones
OR: Con que se cumpla una condición es suficiente
NOT: Niega una condición
*/
SELECT * FROM address WHERE district = 'California';
SELECT * FROM address WHERE district != 'California';
SELECT * FROM address WHERE NOT district = 'California';
SELECT * FROM address WHERE NOT district = 'California' ORDER BY district;

SELECT * FROM address WHERE district = 'Abu Dhabi' OR district = 'California'; 

SELECT * FROM address WHERE district IS NOT null ORDER BY district;
SELECT * FROM address WHERE NOT district = '' ORDER BY district;

SELECT * FROM address WHERE address2 IS NOT null AND address_id = 1 ORDER BY district;
SELECT * FROM address WHERE address2 IS NOT null OR address_id = 1 ORDER BY district;


/*
	Group BY
	SELECT ... GROUP BY district
*/

SELECT * FROM address GROUP BY district;
SELECT address_id district FROM address;
SELECT district, COUNT(district) FROM address GROUP BY district;
SELECT district, COUNT(district) FROM address GROUP BY district ORDER BY district;
SELECT district, COUNT(district) AS total FROM address GROUP BY district ORDER BY district;

SELECT * FROM actor;
SELECT last_name, COUNT(last_name) FROM actor GROUP BY last_name;
SELECT last_name, COUNT(last_name) FROM actor GROUP BY last_name WHERE COUNT(last_name) > 1;
SELECT last_name, COUNT(last_name) FROM actor WHERE COUNT(last_name) > 1 GROUP BY last_name;
SELECT last_name, COUNT(last_name) FROM actor GROUP BY last_name HAVING COUNT(last_name) > 1;


-- Obtener en cuantas películas actúa cada actor;
SELECT * FROM film_actor;
SELECT * FROM film;

SELECT * FROM film f
INNER JOIN film_actor fa ON f.film_id = fa.film_id

SELECT f.title, COUNT(fa.actor_id) FROM film f
INNER JOIN film_actor fa ON f.film_id = fa.film_id
GROUP BY f.title;



-- Stock de una película en base a su título
SELECT * FROM inventory;

SELECT * FROM film f
INNER JOIN inventory i ON f.film_id = i.film_id
WHERE title = 'ACADEMY DINOSAUR'
GROUP BY title;

SELECT f.title, COUNT(i.inventory_id) AS unidades FROM film f
INNER JOIN inventory i ON f.film_id = i.film_id
WHERE title = 'ACADEMY DINOSAUR'
GROUP BY title;

SELECT f.title, COUNT(i.inventory_id) AS unidades FROM film f
INNER JOIN inventory i ON f.film_id = i.film_id
GROUP BY title;

SELECT f.title, COUNT(i.inventory_id) AS unidades FROM film f
INNER JOIN inventory i ON f.film_id = i.film_id
WHERE title = 'FICTION CHRISTMAS'
GROUP BY title;

SELECT f.title, COUNT(i.inventory_id) AS unidades FROM film f
INNER JOIN inventory i ON f.film_id = i.film_id
GROUP BY title
ORDER BY unidades;

SELECT f.title, COUNT(i.inventory_id) AS unidades FROM film f
INNER JOIN inventory i ON f.film_id = i.film_id
GROUP BY title
ORDER BY unidades DESC;


/*
SUM()
*/
SELECT * FROM customer;
SELECT * FROM payment;

SELECT * FROM payment p
INNER JOIN customer c ON p.customer_id = c.customer_id;

SELECT c.email, COUNT(p.payment_id) AS num_pagos FROM payment p
INNER JOIN customer c ON p.customer_id = c.customer_id
GROUP BY c.email;

SELECT c.email, SUM(p.amount) AS num_pagos FROM payment p
INNER JOIN customer c ON p.customer_id = c.customer_id
GROUP BY c.email;


SELECT * FROM staff;

SELECT * FROM payment p
INNER JOIN staff s ON p.staff_id = s.staff_id;

SELECT s.first_name, COUNT(p.payment_id) AS num_ventas, SUM(p.amount) AS cantidad_ventas FROM payment p
INNER JOIN staff s ON p.staff_id = s.staff_id
GROUP BY s.first_name;

-- joins

SELECT * FROM customer;
SELECT * FROM address;
SELECT * FROM city;
SELECT * FROM country;


-- Consulta a 2 tablas: customer y address

SELECT first_name, last_name, customer.address_id FROM customer 
INNER JOIN address ON customer.address_id = address.address_id;

SELECT first_name, last_name, c.address_id FROM customer c
INNER JOIN address a ON c.address_id = a.address_id;

SELECT first_name, last_name, c.address_id, address FROM customer c
INNER JOIN address a ON c.address_id = a.address_id;

SELECT * FROM customer c
INNER JOIN address a ON c.address_id = a.address_id;

SELECT c.email, a.address FROM customer c
INNER JOIN address a ON c.address_id = a.address_id;


-- Consulta a 3 tablas: customer, address, city
SELECT cu.email, a.address FROM customer cu
INNER JOIN address a ON cu.address_id = a.address_id
INNER JOIN city ci ON a.city_id = ci.city_id;

SELECT * FROM customer cu
INNER JOIN address a ON cu.address_id = a.address_id
INNER JOIN city ci ON a.city_id = ci.city_id;

SELECT cu.email, a.address, ci.city FROM customer cu
INNER JOIN address a ON cu.address_id = a.address_id
INNER JOIN city ci ON a.city_id = ci.city_id;


-- Consulta a 4 tablas: customer, address, city, country
SELECT cu.email, a.address, ci.city FROM customer cu
INNER JOIN address a ON cu.address_id = a.address_id
INNER JOIN city ci ON a.city_id = ci.city_id
INNER JOIN country co ON ci.country_id = co.country_id;

SELECT * FROM customer cu
INNER JOIN address a ON cu.address_id = a.address_id
INNER JOIN city ci ON a.city_id = ci.city_id
INNER JOIN country co ON ci.country_id = co.country_id;

SELECT cu.email, a.address, ci.city, co.country FROM customer cu
INNER JOIN address a ON cu.address_id = a.address_id
INNER JOIN city ci ON a.city_id = ci.city_id
INNER JOIN country co ON ci.country_id = co.country_id;




/*
Función concat()
*/

SELECT * FROM actor;

SELECT first_name, last_name FROM actor;

SELECT concat(first_name, ' ', last_name) FROM actor;

SELECT concat(first_name, ' ', last_name) as full_name FROM actor;


/*
LIKE
*/
SELECT * FROM film;

SELECT * FROM film WHERE description = 'Monastery';
SELECT * FROM film WHERE description LIKE 'Monastery%';
SELECT * FROM film WHERE description LIKE '%Monastery';
SELECT * FROM film WHERE description LIKE '%Monastery%';
SELECT * FROM film WHERE description LIKE '%Drama%';


SELECT * FROM actor;

SELECT * FROM actor WHERE last_name LIKE '%LI%';

-- Orden ascendente, empieza por el principio y va hasta el final
SELECT * FROM actor WHERE last_name LIKE '%LI%' ORDER BY last_name;
-- Orden descendente, empieza por el final y va hasta el principio 
SELECT * FROM actor WHERE last_name LIKE '%LI%' ORDER BY last_name DESC; 


/*
IN -> bUSCAR ENTRE una determinada lista
*/

SELECT * FROM country;

SELECT * FROM country WHERE country = 'Spain';
SELECT * FROM country WHERE country = 'Spain' OR country = 'Germany';
SELECT * FROM country WHERE country = 'Spain' OR country = 'Germany' OR country = 'France';

SELECT * FROM country WHERE country IN( 'Spain', 'Germany', 'France', 'Mexico');


SELECT * FROM customer;

SELECT * FROM customer WHERE customer_id = 15;

SELECT * FROM customer WHERE customer_id IN (15, 16, 17, 18);


/*
 Sub queries
*/

SELECT * FROM film;
SELECT * FROM language;

SELECT DISTINCT language_id from film;

SELECT * FROM film f
INNER JOIN language l ON f.language_id = l.language_id;

SELECT l.name, COUNT(f.film_id) FROM film f
INNER JOIN language l ON f.language_id = l.language_id
GROUP BY l.name;

-- Cambiar idioma a algunas películas
UPDATE film SET language_id = 2 WHERE film_id > 100 AND film_id < 200;
UPDATE film SET language_id = 3 WHERE film_id >= 200 AND film_id < 300;
UPDATE film SET language_id = 4 WHERE film_id >= 300 AND film_id < 400;



SELECT title FROM film 
WHERE language_id = 'English';

SELECT title FROM film 
WHERE language_id = 1;

SELECT title FROM film 
WHERE language_id = (SELECT  language_id FROM language WHERE name = 'English');

SELECT title FROM film 
WHERE language_id IN (SELECT  language_id FROM language WHERE name = 'English' OR name = 'Italian');


/*SELECT * FROM actor;
SELECT * FROM film;
SELECT * FROM film_actor;

SELECT FROM actor
WHERE actor_id IN ();
*/

-- Películas más alquiladas
SELECT * FROM rental;
SELECT * FROM inventory;
SELECT * FROM film;

SELECT * FROM film f
INNER JOIN (SELECT * FROM inventory i
INNER JOIN rental r ON r.inventory_id = i.inventory_id) res ON res.film_id = f.film_id;

SELECT f.title, COUNT(f.film_id) AS veces_alquiladas FROM film f
INNER JOIN (SELECT * FROM inventory i
INNER JOIN rental r ON r.inventory_id = i.inventory_id) res ON res.film_id = f.film_id
GROUP BY f.title
ORDER BY veces_alquiladas DESC;






























