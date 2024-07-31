CREATE DATABASE ecommerce;

USE ecommerce;

CREATE TABLE products (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    description TEXT,
    price FLOAT NOT NULL,
    image VARCHAR(255)
);

CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL
);

INSERT INTO products (name, description, price, image) VALUES
('Product 1', 'Description for Product 1', 19.99, 'product1.jpg'),
('Product 2', 'Description for Product 2', 29.99, 'product2.jpg'),
('Product 3', 'Description for Product 3', 39.99, 'product3.jpg');
