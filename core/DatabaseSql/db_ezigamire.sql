CREATE DATABASE db_ezigamire;
use db_ezigamire;

CREATE TABLE departments(
    dep_id int primary key auto_increment not null,
    dep_name varchar(255),
    createdAt TIMESTAMP DEFAULT NOW(),
    updatedAt TIMESTAMP DEFAULT NOW() ON UPDATE CURRENT_TIMESTAMP

);

CREATE TABLE jobs(
    job_id int primary key auto_increment not null,
    job_title varchar(255) NOT NULL,
    job_description varchar(255),
    dep_id int,

    createdAt TIMESTAMP DEFAULT NOW(),
    updatedAt TIMESTAMP DEFAULT NOW() ON UPDATE CURRENT_TIMESTAMP,
    foreign key(dep_id) REFERENCES departments(dep_id)

);

CREATE TABLE salaries(
    salary_id int primary key auto_increment not null,
    job_id int,
    amount varchar(255) NOT NULL,
    createdAt TIMESTAMP DEFAULT NOW(),
    updatedAt TIMESTAMP DEFAULT NOW() ON UPDATE CURRENT_TIMESTAMP,
    foreign key(job_id) REFERENCES jobs(job_id)

);

CREATE TABLE employees(
    employee_id int primary key auto_increment not null,
    names varchar(255) NOT NULL,
    marital_status varchar(255)NOT NULL,
    dob varchar(255) NOT NULL,
    position int,
    email varchar(255) NOT NULL,
    phone varchar(255) NOT NULL,
    address varchar(255) NOT NULL,
    nid varchar(255) NOT NULL,
    start_date varchar(255) NOT NULL,
    password varchar(255) NOT NULL,
    status varchar(255) DEFAULT "registered",
    createdAt TIMESTAMP DEFAULT NOW(),
    updatedAt TIMESTAMP DEFAULT NOW() ON UPDATE CURRENT_TIMESTAMP,
    foreign key(position) REFERENCES jobs(job_id)

);


CREATE TABLE users(
    user_id int primary key auto_increment not null,
    Names varchar(255) NOT NULL,
    phone varchar(255),
    email varchar(255),
    role varchar(255),
    password varchar(255),
    status varchar(255) DEFAULT "active",
    createdAt TIMESTAMP DEFAULT NOW(),
    updatedAt TIMESTAMP DEFAULT NOW() ON UPDATE CURRENT_TIMESTAMP
   

);
