DROP DATABASE IF EXISTS fmdh;
CREATE DATABASE fmdh;
USE fmdh;

CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(100) UNIQUE,
    passwords VARCHAR(255) NOT NULL
);

INSERT INTO users (email, passwords ) 
VALUES 
("azerty@hotmail.com" , "azerty"),
("azerty1@hotmail.com" , "azerty1"),
("azerty2@hotmail.com" , "azerty2");

SELECT * from users;


CREATE TABLE annonces(
id INT AUTO_INCREMENT PRIMARY KEY,
title VARCHAR(100),
operation ENUM('for rent', 'for sale') NOT NULL,
price DECIMAL(10, 2) NOT NULL,
category  ENUM('Apartment', 'House') NOT NULL,
rooms INT NOT NULL,
bedrooms INT NOT NULL,
area DECIMAL(10, 2) NOT NULL,
city VARCHAR(50),
img VARCHAR(100),
favorite BOOLEAN NOT NULL
);

INSERT INTO annonces (id, title, operation, price, category, rooms, bedrooms, area, city, img, favorite )
VALUES
(1, "Apartment", 'for sale', 180000, 'Apartment', 3, 5, 80, 'Belleville France', './assets/images/annonce appartement 1.webp', TRUE),
(2, "Apartment", 'for rent', 700, 'Apartment', 3, 4, 80, 'francheville France', './assets/images/annonce aprtement 2.webp', FALSE),
(3, "House", 'for sale', 250000, 'House', 4, 3, 90, 'Belleville France', './assets/images/annonce appartement 1.webp', TRUE),
(4, "House", 'for rent', 900, 'House', 3, 2, 100, 'lyon France', './assets/images/annonce aprtement 2.webp', FALSE),
(5, "House", 'for sale', 300000, 'House', 3, 2, 90, 'Belleville France', './assets/images/annonce aprtement 2.webp', FALSE),
(6, "Apartment", 'for rent', 1000, 'Apartment', 3, 2, 80, 'sainte foy France', './assets/images/annonce appartement 1.webp', TRUE),
(7, "Apartment", 'for rent', 860, 'Apartment', 3, 2, 120, 'Belleville France', './assets/images/annonce aprtement 2.webp', FALSE),
(8, "House", 'for sale', 140000, 'House', 5, 3, 70, 'lille France', './assets/images/annonce appartement 1.webp', TRUE);

SELECT * FROM annonces;