-- Sentencias DML: Data Manipulation Language
-- CRUD: 
-- Create (INSERT INTO) 
-- Read (SELECT FROM)
-- Update (UPDATE SET) 
-- Delete (DELETE FROM)

-- 1. Consultas o recuperación de datos

SELECT * FROM employees;

SELECT id FROM employees;

SELECT id, email FROM employees;

SELECT email, id FROM employees;

SELECT id, email, salary FROM employees;

-- Filtrar filas

SELECT * FROM employees WHERE id = 1;

SELECT * FROM employees WHERE name = 'Blanca';

SELECT * FROM employees WHERE married = TRUE;

SELECT * FROM employees WHERE married = 'true';

SELECT * FROM employees WHERE birth_date = '1990-12-25';

SELECT * FROM employees WHERE birth_date = '1990-12-26';

SELECT * FROM employees WHERE married = TRUE AND salary > 10000; 

SELECT * FROM employees WHERE married = TRUE AND salary > 20000; 

-- 2. Inserción de datos

INSERT INTO employees(name, email) VALUES ('Isabel', 'isabel@company.com');

INSERT INTO employees(name, email, married, genre, salary) 
VALUES ('Maria', 'maria@company.com', TRUE, 'F', 23566.43);

INSERT INTO employees(name, email, married, genre, salary, birth_date, start_at) 
VALUES ('Isabel', 'isabel@company.com', TRUE, 'F', 23566.43, '1987-5-29', '10:00:00');

INSERT INTO employees
VALUES (8, False, 'Paloma', 'paloma@company.com', 'F', 23566.43, '1987-5-29', '10:00:00');

INSERT INTO employees
VALUES (9, False, 'Ester', 'ester@company.com', 'F', 23566.43, '1987-5-29', '10:00:00');

INSERT INTO employees(name, email, married, genre, salary) 
VALUES ('Sara', 'sara@company.com', TRUE, 'F', 23566.43) RETURNING id;

-- 3. Actualizar o editar

UPDATE employees SET birth_date = '1997-03-21';

UPDATE employees SET birth_date = '1997-03-21' WHERE id = 3;

UPDATE employees SET salary = 45000 WHERE email = 'isabel@company.com';

UPDATE employees SET genre = 'M', start_at = '14:00:00'  WHERE email = 'isabel@company.com';

UPDATE employees SET genre = 'M', start_at = '14:00:00'  WHERE email = 'noexiste@company.com';

UPDATE employees SET genre = 'M', start_at = '14:00:00'  WHERE email = 'isabel@company.com' RETURNING *;

UPDATE employees SET genre = NULL WHERE id = 14;

-- 4. Borrar

DELETE FROM employees;

DELETE FROM employees WHERE married = TRUE;

DELETE FROM employees WHERE salary < 33000;

DELETE FROM employees WHERE salary IS NULL;








