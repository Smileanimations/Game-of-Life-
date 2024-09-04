DROP DATABASE IF EXISTS `gameoflife`;

CREATE DATABASE `gameoflife`;

USE `gameoflife`;

CREATE TABLE `patterns` (
    id MEDIUMINT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(25),
    details VARCHAR(100)
)


