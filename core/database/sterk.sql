CREATE DATABASE db_team;

USE db_team;

CREATE TABLE users
(
    user_id INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    username VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    password VARCHAR(64) NOT NULL,
    status VARCHAR(12) DEFAULT "Active",
    createdAt TIMESTAMP DEFAULT NOW(),
    updatedAt TIMESTAMP DEFAULT NOW() ON UPDATE CURRENT_TIMESTAMP
);

CREATE TABLE categories
(
    category_id INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    category_name VARCHAR(100) NOT NULL,
    category_summary VARCHAR(100) NOT NULL,
    createdAt TIMESTAMP DEFAULT NOW(),
    updatedAt TIMESTAMP DEFAULT NOW() ON UPDATE CURRENT_TIMESTAMP

);

CREATE TABLE services
(
    service_id INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    service_name VARCHAR(100) NOT NULL,
    category_id int NOT NULL,
    FOREIGN KEY(category_id) REFERENCES categories(category_id),
    createdAt TIMESTAMP DEFAULT NOW(),
    updatedAt TIMESTAMP DEFAULT NOW() ON UPDATE CURRENT_TIMESTAMP

);
CREATE TABLE members
(
    member_id INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    email VARCHAR(100) NOT NULL,
    member_name VARCHAR(100) NOT NULL,
    category_id int,
    working_time VARCHAR(100) NOT NULL,
    contact VARCHAR(100) NOT NULL,
    password VARCHAR(64) NOT NULL,
    status VARCHAR(12) DEFAULT "Active",
    createdAt TIMESTAMP DEFAULT NOW(),
    updatedAt TIMESTAMP DEFAULT NOW() ON UPDATE CURRENT_TIMESTAMP
);
CREATE TABLE customers
(
    customer_id INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    customer_name VARCHAR(100) NOT NULL,
    contact VARCHAR(100) NOT NULL,
    createdAt TIMESTAMP DEFAULT NOW(),
    updatedAt TIMESTAMP DEFAULT NOW() ON UPDATE CURRENT_TIMESTAMP

);

CREATE TABLE bookings
(
    booking_id INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    customer_id int,
    service_id int,
    date VARCHAR(64) NOT NULL,
    venue VARCHAR(64) NOT NULL,
    agent VARCHAR(100),
    status VARCHAR(64) DEFAULT "pending",

    team int,
    FOREIGN KEY(customer_id) REFERENCES customers(customer_id),
    FOREIGN KEY(service_id) REFERENCES services(service_id),
    FOREIGN KEY(team) REFERENCES members(member_id),
    createdAt TIMESTAMP DEFAULT NOW(),
    updatedAt TIMESTAMP DEFAULT NOW() ON UPDATE CURRENT_TIMESTAMP
);

--select (member_name) as team,venue,date,customer_name,contact from bookings join members on bookings.team = members.member_id inner join customers on customers.customer_id = bookings.customer_id;