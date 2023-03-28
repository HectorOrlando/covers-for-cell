-- CREATE DATABASE IN MYSQL
CREATE DATABASE crud_case_cover;

-- CREATE TABLE
CREATE TABLE product (id INT(10) NOT NULL AUTO_INCREMENT, name VARCHAR(100), price DOUBLE, active TINYINT(1), PRIMARY KEY (id));

-- INSERT PRODUCTS
INSERT INTO product VALUES(null, 'Cover iphone', 20.99, 1);
INSERT INTO product VALUES(null, 'Cover Samsung', 15, 1);
INSERT INTO product VALUES(null, 'Cover Oppo', 33, 1);
INSERT INTO product VALUES(null, 'Cover Motorola', 8, 0);
INSERT INTO product VALUES(null, 'Cover Xiaomi', 15.33, 0);
INSERT INTO product VALUES(null, 'Cover One Plus', 5, 1);