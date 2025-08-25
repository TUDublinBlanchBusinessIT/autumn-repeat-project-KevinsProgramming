CREATE DATABASE IF NOT EXISTS sswdr;
USE sswdr;

CREATE TABLE IF NOT EXISTS contacts (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL
);

-- Create datebase - from GeeksforGeeks site
-- Create table from w3schools site