-- MANUFACTURER

CREATE TABLE manufacturer(
	id SERIAL,
	name VARCHAR(50) NOT NULL,
	num_employees INT,
	CONSTRAINT pk_manufacturer PRIMARY KEY(id)
);

SELECT * FROM  manufacturer;

INSERT INTO manufacturer (name, num_employees)
VALUES ('Ford', 29000);

INSERT INTO manufacturer (name, num_employees)
VALUES ('Toyota', 45000);


-- MODEL

CREATE TABLE model(
	id SERIAL,
	name VARCHAR(50) NOT NULL,
	manufacturer_id INT,
	CONSTRAINT pk_model PRIMARY KEY(id),
	CONSTRAINT fk_model_manufacturer FOREIGN KEY(manufacturer_id) REFERENCES manufacturer(id)
);

SELECT * FROM model;

INSERT INTO model (name, manufacturer_id)
VALUES ('Mondeo', 1);

INSERT INTO model (name, manufacturer_id)
VALUES ('Fiesta', 1);


INSERT INTO model (name, manufacturer_id)
VALUES ('Prius', 2);


-- VERSION

CREATE TABLE version(
	id SERIAL,
	name VARCHAR(50) NOT NULL,
	engine VARCHAR(50),
	price NUMERIC,
	cc NUMERIC(2,1),
	id_model INT,
	CONSTRAINT pk_version PRIMARY KEY(id),
	CONSTRAINT fk_version_model FOREIGN KEY (id_model) REFERENCES model(id) ON UPDATE SET null ON DELETE SET null
);

SELECT * FROM version;

INSERT INTO version (name, engine, price, cc, id_model) VALUES('Basic', 'Diesel 4C', 30000, 1.9, 1);
INSERT INTO version (name, engine, price, cc, id_model) VALUES('Medium', 'Diesel 5C', 50000, 2.2, 1);
INSERT INTO version (name, engine, price, cc, id_model) VALUES('Advance', 'Diesel 6C', 80000, 3.2, 1);

INSERT INTO version (name, engine, price, cc, id_model) VALUES('Sport', 'Gasolina 4C', 50000, 2.1, 2);
INSERT INTO version (name, engine, price, cc, id_model) VALUES('Sport Advance', 'Gasolina 8C', 90000, 3.2, 2);


-- EXTRA
CREATE TABLE extra(
	id SERIAL,
	name VARCHAR(50) NOT NULL,
	description VARCHAR(300),
	CONSTRAINT pk_extra PRIMARY KEY(id)
);

CREATE TABLE extra_version(
	id_version INT,
	id_extra INT,
	price NUMERIC NOT NULL CHECK (price >= 0),
	CONSTRAINT pk_extra_version PRIMARY KEY (id_version, id_extra),
	CONSTRAINT fk_version_extra FOREIGN KEY (id_version) REFERENCES version(id) ON UPDATE cascade ON DELETE cascade,
	CONSTRAINT fk_extra_version FOREIGN KEY (id_extra) REFERENCES extra(id) ON UPDATE cascade ON DELETE cascade
);

INSERT INTO extra (name, description) 
VALUES('Techo solar', 'Techo solar flamante lorem ipsum...');

INSERT INTO extra (name, description) 
VALUES('Climatizador', 'Para calentar flamante lorem ipsum...');

INSERT INTO extra (name, description) 
VALUES('Wifi', 'Conexion al Cloud flamante lorem ipsum...');

INSERT INTO extra (name, description) 
VALUES('Levas', 'Cambio automatico flamante lorem ipsum...');

INSERT INTO extra (name, description) 
VALUES('Frigorifico', 'Enfriar lata flamante lorem ipsum...');

SELECT * FROM extra;

SELECT * FROM extra_version;

-- Ford Mondeo Basic techo solar
INSERT INTO extra_version VALUES(1, 1, 3000);
-- Ford Mondeo Basic Climatizador
INSERT INTO extra_version VALUES(1, 2, 1000);
-- Ford Mondeo Basic Wifi
INSERT INTO extra_version VALUES(1, 3, 500);


-- Ford Mondeo Advance techo solar
INSERT INTO extra_version VALUES(3, 1, 3300);
-- Ford Mondeo Advance Climatizador
INSERT INTO extra_version VALUES(3, 2, 1200);
-- Ford Mondeo Advance Wifi
INSERT INTO extra_version VALUES(3, 3, 500);

CREATE TABLE employee(
	id SERIAL,
	name VARCHAR(30),
	nif VARCHAR(9) NOT NULL UNIQUE,
	phone VARCHAR(9),
	CONSTRAINT pk_employee PRIMARY KEY(id)
);

INSERT INTO employee(name, nif, phone) VALUES ('Isabel', '334455776', '978543654');
INSERT INTO employee(name, nif, phone) VALUES ('Belen', '542679087', '432756870');
SELECT * FROM employee;

CREATE TABLE customer(
	id SERIAL,
	name VARCHAR(30),
	email VARCHAR(50) NOT NULL UNIQUE,
	CONSTRAINT pk_customer PRIMARY KEY(id)
);

INSERT INTO customer(name, email) VALUES ('Raul', 'raul@gmail.com');
INSERT INTO customer(name, email) VALUES ('Juan', 'juan@gmail.com');
SELECT * FROM customer;

CREATE TABLE vehicle(
	id SERIAL,
	license_number VARCHAR(7),
	creation_date DATE,
	price_gross NUMERIC,
	price_net NUMERIC,
	type VARCHAR(30),
	
	manufacturer_id INT,
	id_model INT, 
	id_version INT,
	id_extra INT,
	
	CONSTRAINT pk_vehicle PRIMARY KEY(id),
	CONSTRAINT fk_vehicle_manufacturer FOREIGN KEY (manufacturer_id) REFERENCES manufacturer(id),
	CONSTRAINT fk_vehicle_model FOREIGN KEY (id_model) REFERENCES model(id),
	CONSTRAINT fk_vehicle_extra_version FOREIGN KEY (id_version, id_extra) REFERENCES extra_version(id_version, id_extra)
);

SELECT * FROM vehicle;
SELECT * FROM manufacturer;
SELECT * FROM model;
SELECT * FROM version;
SELECT * FROM extra_version;

INSERT INTO vehicle (license_number, price_gross, manufacturer_id, id_model, id_version, id_extra)
VALUES ('1234LMF', 40000, 1, 2, 1, 2);

INSERT INTO vehicle (license_number, price_gross, manufacturer_id, id_model, id_version, id_extra)
VALUES ('5653KGB', 60000, 1, 3, 3, 3);


CREATE TABLE sale(
	id SERIAL,
	sale_date DATE,
	channel VARCHAR(300),
	
	id_vehicle INT,
	id_employee INT,
	id_customer INT,
	
	CONSTRAINT pk_sale PRIMARY KEY(id),
	CONSTRAINT fk_sale_vehicle FOREIGN KEY (id_vehicle) REFERENCES vehicle(id),
	CONSTRAINT fk_sale_employee FOREIGN KEY (id_employee) REFERENCES employee(id),
	CONSTRAINT fk_sale_customer FOREIGN KEY (id_customer) REFERENCES customer(id)
);

INSERT INTO sale(sale_date, channel, id_vehicle, id_employee, id_customer)
VALUES('2021-06-04', 'Phone', 1, 1, 1);

SELECT * FROM sale;
