/*
Importar base de datos:
1 - Crear base de datos northwind desde pgAdmin
2 - Ejecutar el comando para restaurar la base de datos:
	psql -U postgres -d northwind < northwind.sql
*/

/*
 Consultas de utilidad para explorar y administrar bases de datos y tablas
*/

-- Ver tamano de las bases de datos
SELECT pg_size_pretty (pg_database_size('northwind'));
SELECT pg_size_pretty (pg_database_size('pagila'));

SELECT pg_database.datname, pg_size_pretty(pg_database_size(pg_database.datname)) AS SIZE FROM pg_database;

-- Ver tamaño de una tabla
SELECT pg_size_pretty(pg_relation_size('orders'));

-- Ver tamaño de las 10 tablas que más ocupan
SELECT 
	relname AS "relation",
	pg_size_pretty (
		pg_total_relation_size (C.oid)
	) AS "total_size"
FROM
	pg_class C
LEFT JOIN pg_namespace N ON (N.OID = C.relnamespace) 
WHERE
	nspname NOT IN (
		'pg_catalog',
		'information_schema'
	)
AND C .relkind <> 'i'
AND nspname !~ '^pg_toast'
ORDER BY
	pg_total_relation_size(C. oid) DESC
LIMIT 10;

-- Conocer el schema actual en el que estamos 
SELECT CURRENT_SCHEMA();

-- Buscar las vistas materializadas en la base de datos
SELECT * FROM pg_matviews;




-- CARGAR EXTENSIONES
	-- pgcrypto (ofuscar datos)
CREATE EXTENSION pgcrypto;

SELECT * FROM employees;

-- Cifrar el campo
INSERT INTO employees (employee_id, last_name, first_name, notes) VALUES
(11, 'Em', 'Emp10', pgp_sym_encrypt('Emp10', 'password'));

-- Descifar el campo
SELECT employee_id, pgp_sym_decrypt(notes::bytea, 'password') AS notes FROM employees;


/*
 Consultas joins:
*/

SELECT * FROM customers;
SELECT * FROM orders;
SELECT * FROM shippers;
SELECT * FROM employees;

-- 1. INNER JOIN 

SELECT o.order_id, c.contact_name  FROM orders o 
INNER JOIN customers c ON o.customer_id = c.customer_id;

SELECT o.order_id, c.contact_name, s.company_name  FROM orders o 
INNER JOIN customers c ON o.customer_id = c.customer_id
INNER JOIN shippers s ON o.ship_via = s.shipper_id;

-- 2. LEFT JOIN 
-- Fijarse en los resultados que aparecen 2 customers al final que no tiene order relacionada:
SELECT c.contact_name, o.order_id FROM customers c 
LEFT JOIN orders o ON c.customer_id = o.customer_id;

SELECT c.contact_name, o.order_id FROM customers c 
RIGHT JOIN orders o ON c.customer_id = o.customer_id;

SELECT o.order_id, e.first_name, e.last_name FROM orders o 
INNER JOIN employees e ON o.employee_id = e.employee_id;

-- 3. RIGHT JOIN: 
SELECT o.order_id, e.first_name, e.last_name FROM orders o 
INNER JOIN employees e ON o.employee_id = e.employee_id;

-- Fijarse que aparecen empleados sin order asociado
SELECT o.order_id, e.first_name, e.last_name FROM orders o 
RIGHT JOIN employees e ON o.employee_id = e.employee_id;

SELECT o.order_id, e.first_name, e.last_name FROM orders o 
LEFT JOIN employees e ON o.employee_id = e.employee_id;


INSERT INTO employees (employee_id, last_name, first_name, title)
VALUES (10, 'Emp10', 'EMP10', 'Director');

-- Resultado 830 ordenes
SELECT o.order_id, e.first_name, e.last_name FROM orders o 
INNER JOIN employees e ON o.employee_id = e.employee_id;

-- Resultado 831 ordenes
SELECT o.order_id, e.first_name, e.last_name FROM orders o 
RIGHT JOIN employees e ON o.employee_id = e.employee_id;

-- Resultado 830 ordenes
SELECT o.order_id, e.first_name, e.last_name FROM orders o 
LEFT JOIN employees e ON o.employee_id = e.employee_id;



-- GROUP BY
SELECT city, COUNT(customer_id) AS num_customers FROM customers  GROUP BY city;
SELECT city, COUNT(customer_id) AS num_customers FROM customers  GROUP BY city ORDER BY city;
SELECT city, COUNT(customer_id) AS num_customers FROM customers  GROUP BY city ORDER BY num_customers;
SELECT city, COUNT(customer_id) AS num_customers FROM customers  GROUP BY city ORDER BY num_customers DESC;




SELECT country, COUNT(customer_id) AS num_customers FROM customers  GROUP BY country;
SELECT country, COUNT(customer_id) AS num_customers FROM customers  GROUP BY country ORDER BY num_customers DESC;

-- Empleado que mas ha vendido
SELECT * FROM orders o 
INNER JOIN employees e ON  o.employee_id = e.employee_id;

SELECT e.title, COUNT(o.order_id) AS num_orders FROM orders o 
INNER JOIN employees e ON  o.employee_id = e.employee_id
GROUP BY e.title
ORDER BY num_orders DESC;

SELECT e.title, COUNT(o.order_id)  FROM orders o 
INNER JOIN employees e ON  o.employee_id = e.employee_id
GROUP BY e.last_name;

SELECT e.first_name, e.last_name, COUNT(o.order_id) AS num_orders FROM orders o 
INNER JOIN employees e ON  o.employee_id = e.employee_id
GROUP BY e.first_name, e.last_name
ORDER BY num_orders DESC;

/*
 Vistas
 	Son una forma de guardar las consultas SQL bajo un identificador para ejecutarlas
	de manera más sencilla sin tener que repetir todo el código SQL 
*/

CREATE VIEW num_orders_by_employee AS
SELECT e.first_name, e.last_name, COUNT(o.order_id) AS num_orders FROM orders o 
INNER JOIN employees e ON  o.employee_id = e.employee_id
GROUP BY e.first_name, e.last_name
ORDER BY num_orders DESC;


SELECT * FROM num_orders_by_employee;


/* 
Vistas materializadas:
	- Guardan físicamente el resultado de una query y actualizan los datos periódicamente
	- cachean el resutlado de una query compleja y permiten refrescarlo
	- para crear una vista materializada cargando datos tenemos la opción WITH DATA
	
CREATE MATERIALIZED VIEW IF NOT EXISTS view_name AS
query
WITH [NO] DATA;
*/

CREATE MATERIALIZED VIEW mv_num_orders_by_employee AS 
SELECT e.first_name, e.last_name, COUNT(o.order_id) AS num_orders FROM orders o 
INNER JOIN employees e ON  o.employee_id = e.employee_id
GROUP BY e.first_name, e.last_name
ORDER BY num_orders DESC
with DATA;

SELECT * FROM mv_num_orders_by_employee;

SELECT * FROM order_details;


-- Insertar datos ficticios en una tabla
CREATE TABLE example (
	id INT,
	name VARCHAR
);

/*
generate_series
	Para generar datos de prueba
*/

SELECT * FROM example;

SELECT * FROM generate_series(1,10);

INSERT INTO example(id) 
SELECT * FROM generate_series(1, 500000);


CREATE MATERIALIZED VIEW mv_example AS
SELECT * FROM example
with DATA;

SELECT * FROM mv_example;


SELECT * FROM generate_series(
	'2022-01-01 00:00'::timestamp,
	'2022-12-25 00:00',
	'6 hours'
);


SELECT * FROM products;

/*
EXPLAIN ANALYZE
	permite mostrar el query planner y ver los tiempos:
*/

EXPLAIN ANALYZE SELECT * FROM order_details;
EXPLAIN ANALYZE SELECT * FROM order_details WHERE order_id = 10851;
EXPLAIN ANALYZE SELECT * FROM order_details WHERE unit_price < 10;
CREATE INDEX idx_order_details_unit_price ON order_details(unit_price)WHERE unit_price < 10;
EXPLAIN ANALYZE SELECT * FROM order_details WHERE unit_price < 9;
EXPLAIN ANALYZE SELECT * FROM order_details WHERE unit_price < 5;


EXPLAIN ANALYZE SELECT * FROM num_orders_by_employee;
EXPLAIN ANALYZE SELECT * FROM orders;


/*
 Índices
 	Esctructuras de datos que permiten optimizar las consultas en base a una columna o filtro en particular
	con el fin de evitar escaneo secuencial de toda la tabla
*/


CREATE INDEX idx_orders_pk ON orders(order_id);
EXPLAIN ANALYZE SELECT * FROM orders;


SELECT * FROM example;
EXPLAIN ANALYZE SELECT * FROM example;
CREATE INDEX idx_example_pk ON example(id);
EXPLAIN ANALYZE SELECT * FROM example;


SELECT * FROM example WHERE id = 456777;
EXPLAIN ANALYZE SELECT * FROM example WHERE id = 456777;



/* 
Particionamiento
	- Técnica que permite dividir una misma tabla en múltiples particiones con el objetivo de optimizar las consultas

Hay tres tipos:
	- Rango
	- Lista
	- Hash
*/


-- Tabla base
CREATE TABLE users (
	id BIGSERIAL,
	birth_date DATE NOT NULL,
	first_name VARCHAR(20) NOT NULL,
	PRIMARY KEY (id, birth_date)
)PARTITION BY RANGE(birth_date);


-- Particiones 
CREATE TABLE users_2020 PARTITION OF users
FOR VALUES FROM ('2020-01-01') TO ('2021-01-01');

CREATE TABLE users_2021 PARTITION OF users
FOR VALUES FROM ('2021-01-01') TO ('2022-01-01');

CREATE TABLE users_2022 PARTITION OF users
FOR VALUES FROM ('2022-01-01') TO ('2023-01-01');


INSERT INTO users (birth_date, first_name) VALUES
('2020-01-15', 'User 1'),
('2020-06-15', 'User 2'),
('2021-02-15', 'User 3'),
('2021-11-15', 'User 4'),
('2022-04-15', 'User 5'),
('2022-12-15', 'User 6');

SELECT * FROM users_2020;
SELECT * FROM users_2021;
SELECT * FROM users_2022;


EXPLAIN ANALYZE SELECT * FROM users;
EXPLAIN ANALYZE SELECT * FROM users WHERE birth_date = '2020-06-15';
EXPLAIN ANALYZE SELECT * FROM users WHERE birth_date = '2021-02-15';
EXPLAIN ANALYZE SELECT * FROM users WHERE birth_date > '2021-02-14' AND birth_date < '2022-12-16';

SELECT * FROM users WHERE EXTRACT(MONTH FROM birth_date) = 6;
EXPLAIN ANALYZE SELECT * FROM users WHERE EXTRACT(MONTH FROM birth_date) = 6;
SELECT * FROM users WHERE EXTRACT(MONTH FROM birth_date) = 6 AND EXTRACT (YEAR FROM birth_date) = 2020;
EXPLAIN ANALYZE SELECT * FROM users WHERE EXTRACT(MONTH FROM birth_date) = 6 AND EXTRACT (YEAR FROM birth_date) = 2020;





