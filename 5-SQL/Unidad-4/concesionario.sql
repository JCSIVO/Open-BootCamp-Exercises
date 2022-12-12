SELECT * FROM customer;
SELECT * FROM employee;
SELECT * FROM extra;
SELECT * FROM extra_version;
SELECT * FROM manufacturer;
SELECT * FROM model;
SELECT * FROM sale;
SELECT * FROM vehicle;
SELECT * FROM version;

-- Count ventas por empleado

INSERT INTO sale(sale_date, channel, id_vehicle, id_employee, id_customer)
VALUES ('2022-01-01', 'Phone', 1, 1, 1);

SELECT * FROM sale s
INNER JOIN employee e ON s.id_employee = e.id;

SELECT e.name, COUNT(s.id) FROM sale s
INNER JOIN employee e ON s.id_employee = e.id
GROUP BY e.name;

-- Count compras por cliente 
SELECT * FROM sale s
INNER JOIN customer c ON s.id_customer = c.id;

SELECT c.email, COUNT(s.id) FROM sale s
INNER JOIN customer c ON s.id_customer = c.id
GROUP BY c.email;

-- Fabricante mas vendido
SELECT * FROM sale;
SELECT * FROM vehicle;
SELECT * FROM manufacturer;

SELECT * FROM sale S
INNER JOIN vehicle v ON s.id_vehicle = v.id
INNER JOIN manufacturer m ON v.manufacturer_id = m.id; 

SELECT m.name, COUNT(s.id) FROM sale S
INNER JOIN vehicle v ON s.id_vehicle = v.id
INNER JOIN manufacturer m ON v.manufacturer_id = m.id
GROUP BY m.name; 

-- Modelo mas vendido





-- Versión mas vendida

-- Extra vendido

-- Ventas agrupando por año, mes , dia




