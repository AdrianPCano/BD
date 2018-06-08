CREATE DATABASE CRUD
    DEFAULT CHARACTER SET utf8;

USE CRUD;


SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


CREATE TABLE products (
  numb int(11) NOT NULL AUTO_INCREMENT,
  id_product varchar(20)  NOT NULL,
  name varchar(30)  NOT NULL,
  description text  NOT NULL,
  price decimal(4,2) NOT NULL,
  PRIMARY KEY (numb)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8;


INSERT INTO products (numb, id_product, name, description, price) VALUES
(1, '1z', 'BOARD', 'good quality great board to play', 65),
(2, '1s', 'Pieces', 'practically new chess pieces', 32),
(3, 'B100', 'Book', 'Logical Chess. Great book for beginners', 9.99),
(4, 'B48', 'Book', 'Winning Chess. Near Mint', 12.99),
(5, 'B50', 'Book', 'Endgame Manual. Good Book', 15);

