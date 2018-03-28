
DROP DATABASE IF EXISTS catalog;

CREATE DATABASE catalog;
USE catalog;

GRANT ALL PRIVILEGES ON catalog.* TO user@localhost IDENTIFIED BY '123';

CREATE TABLE user (     
   id int PRIMARY KEY AUTO_INCREMENT,
  firstname varchar(255) NOT NULL,    
  lastname varchar(255) NOT NULL,           
  address varchar(255) NOT NULL, 
  zip_code varchar(255) NOT NULL,
  town varchar(255) NOT NULL,
  country varchar(255) NOT NULL,
  email varchar(255) NOT NULL,
  username varchar(255) NOT NULL,
  password varchar(255) NOT NULL,
  privilege int NOT NULL
);
