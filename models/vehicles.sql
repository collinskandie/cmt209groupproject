-- these database stores list of vehicles and their description.
CREATE TABLE vehicles (
  id INT(11) NOT NULL AUTO_INCREMENT,
  make VARCHAR(50) NOT NULL,
  model VARCHAR(50) NOT NULL,
  year INT(4) NOT NULL,
  price_per_day DECIMAL(8, 2) NOT NULL,
  picture LONGBLOB,
  PRIMARY KEY (id)
);
-- users table sql
CREATE TABLE users (
  id INT(11) NOT NULL AUTO_INCREMENT,
  username VARCHAR(50) NOT NULL,
  password VARCHAR(50) NOT NULL,
  email VARCHAR(100) NOT NULL,
  PRIMARY KEY (id)
);

-- table to store hiring details
CREATE TABLE hires (
  id INT(11) NOT NULL AUTO_INCREMENT,
  user_id INT(11) NOT NULL,
  vehicle_id INT(11) NOT NULL,
  start_date DATE NOT NULL,
  end_date DATE NOT NULL,
  total_price DECIMAL(8, 2) NOT NULL,
  PRIMARY KEY (id),
  FOREIGN KEY (user_id) REFERENCES users(id),
  FOREIGN KEY (vehicle_id) REFERENCES vehicles(id)
);

-- Test Data
INSERT INTO vehicles (make, model, year, price_per_day, picture)
VALUES ('Honda', 'Civic', 2020, 50.00, LOAD_FILE('C:/xampp/htdocs/carhire/imgs/campaigngear.png')),
       ('Toyota', 'Corolla', 2019, 45.00, LOAD_FILE('C:/xampp/htdocs/carhire/imgs/carhiregps.png')),
       ('Ford', 'Mustang', 2018, 75.00, LOAD_FILE('C:/xampp/htdocs/carhire/imgs/landcruiser.png'));

