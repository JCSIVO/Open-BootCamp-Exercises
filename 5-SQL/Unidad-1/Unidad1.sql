-- Creacion Base de Datos
CREATE DATABASE employees2;
CREATE DATABASE pagila;
-- Borrar Base de Datos
DROP DATABASE employees2;

-- Creación de Tablas:
CREATE TABLE IF NOT EXISTS employees(
	id INT,
);

-- ver datos de una tabla
SELECT * FROM employees;

-- Tipos de datos: boolean
CREATE TABLE IF NOT EXISTS employees(
	id INT,
	married BOOLEAN
);

-- Insertar datos
INSERT INTO employees (id, married) VALUES (1, TRUE);
INSERT INTO employees (id, married) VALUES (2, FALSE);

-- Tipos de datos: CHAR, VARHCAR, TEXT
CREATE TABLE IF NOT EXISTS employees(
	id INT,
	married BOOLEAN, 
	name VARCHAR(250),
	genre CHAR(1)
);

INSERT INTO employees (id, married, name, genre) VALUES (1, TRUE, 'Luca', 'M');

-- Tipo de datos: NUMERIC
CREATE TABLE IF NOT EXISTS employees(
	id INT,
	married BOOLEAN, 
	name VARCHAR(250),
	genre CHAR(1),
	salary NUMERIC(9,2)
);

INSERT INTO employees (id, married, name, genre, salary) VALUES (1, TRUE, 'Luca', 'M', 29567.23);

-- Tipo de dato: DATE
CREATE TABLE IF NOT EXISTS employees(
	id INT,
	married BOOLEAN, 
	name VARCHAR(250),
	genre CHAR(1),
	salary NUMERIC(9,2),
	birth_date DATE
);
INSERT INTO employees (id, married, name, genre, salary,birth_date) VALUES (1, TRUE, 'Luca', 'M', 29567.23, '1990-12-25');

-- Tipo de dato: TIME
CREATE TABLE IF NOT EXISTS employees(
	id INT,
	married BOOLEAN, 
	name VARCHAR(250),
	genre CHAR(1),
	salary NUMERIC(9,2),
	birth_date DATE,
	start_at TIME
);
INSERT INTO employees (id, married, name, genre, salary,birth_date,start_at) 
VALUES (1, TRUE, 'Luca', 'M', 29567.23, '1990-12-25', '08:30:00');

-- Identificador
CREATE TABLE IF NOT EXISTS employees(
	id SERIAL,
	married BOOLEAN, 
	name VARCHAR(250),
	genre CHAR(1),
	salary NUMERIC(9,2),
	birth_date DATE,
	start_at TIME
);
INSERT INTO employees (married, name, genre, salary,birth_date,start_at) 
VALUES (TRUE, 'Blanca', 'F', 29567.23, '1990-12-25', '08:30:00');

-- Verificar que todavía sigue permitiendo insertar un id duplicado
INSERT INTO employees (id, married, name, genre, salary,birth_date,start_at) 
VALUES (1, TRUE, 'Luca', 'M', 29567.23, '1990-12-25', '08:30:00');


-- Primary Key
CREATE TABLE IF NOT EXISTS employees(
	id SERIAL PRIMARY KEY,
	married BOOLEAN, 
	name VARCHAR(250),
	genre CHAR(1),
	salary NUMERIC(9,2),
	birth_date DATE,
	start_at TIME
);
INSERT INTO employees (married, name, genre, salary,birth_date,start_at) 
VALUES (TRUE, 'Blanca', 'F', 29567.23, '1990-12-25', '08:30:00');

-- Verificar que ya no permite insertar un id duplicado
INSERT INTO employees (id, married, name, genre, salary,birth_date,start_at) 
VALUES (1, TRUE, 'Luca', 'M', 29567.23, '1990-12-25', '08:30:00');

-- Hacer que un campo sea obligatorio con NOT NULL
CREATE TABLE IF NOT EXISTS employees(
	id SERIAL PRIMARY KEY,
	married BOOLEAN, 
	name VARCHAR(250) NOT NULL,
	genre CHAR(1),
	salary NUMERIC(9,2),
	birth_date DATE,
	start_at TIME
);
-- Comprobar que no deja insertar el empleado sin ponerle un name
INSERT INTO employees (married, genre, salary,birth_date,start_at) 
VALUES (TRUE, 'F', 29567.23, '1990-12-25', '08:30:00');

-- Hacer que un campo sea único con UNIQUE
CREATE TABLE IF NOT EXISTS employees(
	id SERIAL PRIMARY KEY,
	married BOOLEAN, 
	name VARCHAR(250) NOT NULL,
	email VARCHAR(100) UNIQUE,
	genre CHAR(1),
	salary NUMERIC(9,2),
	birth_date DATE,
	start_at TIME
);
INSERT INTO employees (married, name, email, genre, salary,birth_date,start_at) 
VALUES (TRUE, 'Blanca', 'employee@company.com', 'F', 29567.23, '1990-12-25', '08:30:00');

-- Verificar que da fallo por email repetido debería ser único
INSERT INTO employees (married, name, email, genre, salary,birth_date,start_at) 
VALUES (TRUE, 'Belen', 'employee@company.com', 'F', 29567.23, '1990-12-25', '08:30:00');


-- Restricciones en rangos de datos: CHECK
CREATE TABLE IF NOT EXISTS employees(
	id SERIAL PRIMARY KEY,
	married BOOLEAN, 
	name VARCHAR(250) NOT NULL,
	email VARCHAR(100) UNIQUE,
	genre CHAR(1),
	salary NUMERIC(9,2) CHECK (salary >= 15000),
	birth_date DATE CHECK(birth_date > '1975-01-01'),
	start_at TIME
);
INSERT INTO employees (married, name, email, genre, salary,birth_date,start_at) 
VALUES (TRUE, 'Belen', 'employee@company.com', 'F', -1, '1990-12-25', '08:30:00');

INSERT INTO employees (married, name, email, genre, salary,birth_date,start_at) 
VALUES (TRUE, 'Belen', 'employee@company.com', 'F', 16000, '1960-12-25', '08:30:00');


-- Renombrar tabla
ALTER TABLE IF EXISTS employees RENAME TO employees_2022;

-- Agregar columnas a las tablas:
ALTER TABLE employees  ADD COLUMN email VARCHAR(100);

-- Borrar columnas de una tabla
ALTER TABLE employees  DROP COLUMN IF EXISTS salary;

-- Borrar tabla
DROP TABLE IF EXISTS employees;
